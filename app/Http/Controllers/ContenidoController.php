<?php

namespace App\Http\Controllers;

use App\contenido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ContenidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        return view('admin.contenido.index');
    }


    public function apoyo() {

        $print = Contenido::where('parent', 1)->get();

        return view('admin.contenido.apoyo', compact('print'));
    }


  public function alianza() {

    $print = Contenido::where('parent', 2)->get();

    return view('admin.contenido.alianza', compact('print'));
    }

    public function novo() {

        $print = Contenido::where('parent', 3)->get();
    
        return view('admin.contenido.novo', compact('print'));
    }

  public function store(Request $request, $id) {

    if(!empty($request->file('foto'))){

        $pic = new contenido;
        $ret = array();

            $fileName = $request->file('foto');
           
            $extension = $fileName->getClientOriginalExtension();
            
            $namefile = Str::random(30) . '.' . $extension;
            
            \Storage::disk('local')->put("/img/photos/productos/" . $namefile, \File::get($fileName));

            $pic->image = $namefile;
            $pic->parent = $request->parent;

            $ret[] = $namefile;
    
            if($pic->save()){
        \Toastr::success('Guardado');
        return redirect()->back();
        }
        else{
            \Toastr::error('Error de guardado');
            return redirect()->back();
        }
        // echo json_encode($ret);

    }
    else{
        \Toastr::error('No se encontro imagen');
        return redirect()->back();
    }
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

    /**
     * Display the specified resource.
     *
     * @param  \App\contenido  $contenido
     * @return \Illuminate\Http\Response
     */
    public function show(contenido $contenido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contenido  $contenido
     * @return \Illuminate\Http\Response
     */
    public function edit(contenido $contenido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contenido  $contenido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contenido $contenido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contenido  $contenido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){

		$photo = contenido::find($request->id_image);

		if (!empty($photo)) {
			if (!empty($photo->imagen)) {
				\Storage::disk('local')->delete("/img/photos/productos/" . $photo->imagen);
			}

			$photo->delete();
			\Toastr::success('Eliminado Exitosamente');
			return redirect()->back();
			// return $color;
		}

        if (empty($request->photo)) {
			\Toastr::error('Error, intentalo mas tarde');
			return redirect()->back();
		}
    }
}
