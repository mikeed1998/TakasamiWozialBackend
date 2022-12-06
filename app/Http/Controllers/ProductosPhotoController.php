<?php

namespace App\Http\Controllers;

use App\ProductosPhoto;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductosPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request) {
        if(!empty($request->file('foto'))){

            $pic = new ProductosPhoto;
            $ret = array();

                $fileName = $request->file('foto');
               
                $extension = $fileName->getClientOriginalExtension();
                
                $namefile = Str::random(30) . '.' . $extension;
                
                \Storage::disk('local')->put("/img/photos/productos/" . $namefile, \File::get($fileName));
    
                $pic->image = $namefile;
                $pic->producto = $request->producto;
    
                $ret[] = $namefile;
       
            \Toastr::success('Guardado');
            $pic->save();
            return redirect()->back();
            // echo json_encode($ret);

        }
        else{

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductosPhoto  $productosPhoto
     * @return \Illuminate\Http\Response
     */
    public function show(ProductosPhoto $productosPhoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductosPhoto  $productosPhoto
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductosPhoto $productosPhoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductosPhoto  $productosPhoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductosPhoto $productosPhoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductosPhoto  $productosPhoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) {
		if (empty($request->photo)) {
			\Toastr::error('Error, intentalo mas tarde');
			return redirect()->back();
		}
		$photo = ProductosPhoto::find($request->photo);


		if (!empty($photo)) {
			if (!empty($photo->image)) {
				\Storage::disk('local')->delete("/img/photos/productos/" . $photo->image);
			}

            $product = Producto::find($photo->producto);
            $product->inicio = 0;
            $product->save();

			$photo->delete();
			\Toastr::success('Eliminado Exitosamente');
			return redirect()->back();
			// return $color;
		}
    }
}
