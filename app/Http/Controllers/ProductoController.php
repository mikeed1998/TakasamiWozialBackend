<?php

namespace App\Http\Controllers;

use App\Producto;
use App\ProductosPhoto;
use App\ProductoMedida;
use App\Categoria;
use App\Marca;
use App\categoria_detalle;
use App\ProductoRelacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
		$products = Producto::orderBy('orden', 'asc')->get();

		foreach ($products as $prod) {
			$prod->categoria = Categoria::find($prod->categoria);
		}


		return view('admin.productos.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
			$categParent = Categoria::where('parent',0)->get();
			return view('admin.productos.create',compact(['categParent']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
		$validate = Validator::make($request->all(), [
			'nombre' => 'required',
			'descripcion' => 'required',
		], [], []);


		if ($validate->fails()) {
			\Toastr::error('Error, se requieren mas datos');
			return redirect()->back()->withErrors($validate);
		}

		$product = new Producto;

		$product->nombre = $request->nombre;
		$product->descripcion = $request->descripcion;
		// $product->descuento = $request->descuento;
		// $product->slug = Str::slug($request->nombre, '-');

		$product->save();

		\Toastr::success('Guardado');
		return redirect()->route('productos.show', $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto) {
		// dd("aqui estamos, porque aqui fue donde nos puso la vida");
  		$product = Producto::find($producto);
			
  		$categoria = Categoria::where('parent',$product->id)->get()->first();

		if(!empty($categoria)){
		$detalle = Categoria_detalle::where('id_categoria',$categoria->id)->get();

		$product->detalle = $detalle;
	}
		$product->categoria = $categoria;
		
		//dd($detalle);

  		$product->gallery = $product->fotos()->orderBy('orden', 'asc')->get();

  		if (empty($product)) {
  			\Toastr::error('Error al buscar, intente mas tarde');
  			return redirect()->back();
  		}


		  $product->rel = $product->relacionados()->get()->pluck('otroProducto')->toArray();



			//dd($product);
  		return view('admin.productos.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto) {
			$product = Producto::find($producto);

			return view('admin.productos.edit', compact('product'));
		}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $producto) {
  		$product = Producto::find($producto);

  		if (empty($product)) {
  			\Toastr::error('Error, no se encontro el producto a modificar');
  			return redirect()->back();
  		}

  		$validate = Validator::make($request->all(), [
  			'nombre' => 'required',
  			'descripcion' => 'required',
  		], [], []);

  		if ($validate->fails()) {
  			\Toastr::error('Error, se requieren mas datos');
  			return redirect()->back()->withErrors($validate);
  		}


  		$product->nombre = $request->nombre;
  		$product->descripcion = $request->descripcion;
  		// $product->descuento = $request->descuento;
  		// $product->slug = Str::slug($request->nombre, '-');

  		$product->save();

  		\Toastr::success('Guardado');
  		return redirect()->route('productos.show', $product->id);
    }

	public function subida(Request $request){
		$cat = Categoria::where('parent',$request->parent)->get()->first();
		$cat->nombre = $request->nombre;
		$cat->save();
		return redirect()->route('productos.show', $request->parent);
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function updateimg(Request $request, $producto) {
  		$product = Producto::find($producto);

      if ($request->hasFile('portada') || $request->hasFile('medidas')) {
        $field = $request->type;
  			$file = $request->file($field);
  			$extension = $file->getClientOriginalExtension();
  			$namefile = Str::random(30) . '.' . $extension;

  			\Storage::disk('local')->put("/img/photos/productos/" . $namefile, \File::get($file));

  			if (!empty($product->$field)) {
  				\Storage::disk('local')->delete("/img/photos/productos/" . $product->$field);
  			}

  			$product->$field = $namefile;
  		}

  		$product->save();

  		\Toastr::success('Guardado');
  		return redirect()->route('productos.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) {

			if (empty($request->producto)) {
				\Toastr::error('Error, intentalo mas tarde');
				return redirect()->back();
			}

			$producto = Producto::find($request->producto);

			if (!empty($producto)) {

				if (!empty($producto->portada)) {
					\Storage::disk('local')->delete("/img/photos/productos/" . $producto->portada);
				}
				$producto->delete();
				\Toastr::success('Eliminado Exitosamente');
				return redirect()->back();

			}
    }
	public function AddCat($cat_id){
		
		return view("admin.productos.categoria.create", compact('cat_id'));
	}

	public function updatecat($cat_update){
		$cat = Categoria::where('parent',$cat_update)->get()->first();
		return view("admin.productos.categoria.update", compact('cat_update','cat'));
	}
}
