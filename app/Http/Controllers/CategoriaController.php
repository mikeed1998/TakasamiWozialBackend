<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\categoria_detalle;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$cats = Categoria::where('parent',0)->get();
			// foreach ($cats as $cat) {
			// 	$cat->sub = Categoria::where('parent',$cat->id)->count();
			// 	$cat->prods = Producto::where('categoria',$cat->id)->count();
			// }
			return view('admin.categorias.index',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			$cat = new Categoria;

			$slug = $request->nombre ;

			$cat->nombre = $request->nombre;
			$cat->slug = Str::slug($slug);
			$cat->save();

			\Toastr::success('Guardado');
			return redirect()->back();
    }

    public function AddCatProd(Request $request){

        $catnew = new Categoria;

        $catnew->nombre = $request->nombre;
        $catnew->parent = $request->parent;

        $catnew->save();

        return redirect()->route('productos.show',$request->parent);

    }
    public function UpdateCatU(Request $request){

        $catnew = Categoria::where('parent',$request->parent)->get()->first();

        $catnew->nombre = $request->nombre;
        $catnew->parent = $request->parent;

        $catnew->save();

        //return redirect()->back();

    }

    public function deletecate($delete){
        $categoria = Categoria::where('parent', $delete)->get()->first();
        $subcat = categoria_detalle::where('id_categoria',$categoria->id)->get();

        foreach ($subcat as $cat){
            $cat->delete();
        }

        $categoria->delete();

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($categoria)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
			if (empty($request->categoria)) {
				\Toastr::error('No se encontro la categoria, intente mas tarde');
				return redirect()->back();
			}

			$cat = Categoria::find($request->categoria);

			if (Producto::where('categoria',$cat->id)->count()) {
				\Toastr::error('No se puede eliminar una categoria con productos');
				return redirect()->back();
			}

			$cat->delete();

			\Toastr::success('Eliminado exitosamente');
			return redirect()->back();
    }
}
