<?php

namespace App\Http\Controllers;

use App\categoria_detalle;
use App\Categoria;
use Illuminate\Http\Request;

class CategoriaDetalleController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\categoria_detalle  $categoria_detalle
     * @return \Illuminate\Http\Response
     */
    public function show(categoria_detalle $categoria_detalle)
    {
        //
    }

    public function editsub($id_edit){
        $subcat = categoria_detalle::find($id_edit);
        $id_prod = Categoria::find($subcat->id_categoria)->parent;
        $subcat->id_prod = $id_prod;
        //dd($subcat);
        return view('admin.productos.categoria.editcat',compact('subcat'));
    }

    public function savecat(Request $request){
        
        $act = categoria_detalle::find($request->id);
        
        $act->nombre = $request->nombre;
        $act->descripcion = $request->descripcion;
        $act->subtitulo = $request->subtitulo;
        $act->sub_descripcion = $request->sub_desc;

        $act->save();

        $product_id = Categoria::find($act->id_categoria)->parent;

        return redirect()->route('productos.show', $product_id);
    }

    public function delcat($request){
        
        $act = categoria_detalle::find($request);

        $act->delete();

        return redirect()->back();
    }

    public function addsubcat($id_prod){
       //dd($id_prod);
        $id_cat = Categoria::where('parent',$id_prod)->get()->first()->id;
        return view('admin.productos.categoria.CreateSup',compact('id_cat','id_prod'));
    }

    public function savesup(Request $request){
    
        $new_sub = New categoria_detalle;

        $new_sub->id_categoria =  $request->id_cate;
        $new_sub->nombre = $request->nombre;
        $new_sub->descripcion = $request->descripcion;
        $new_sub->subtitulo = $request->subtitulo;
        $new_sub->sub_descripcion = $request->sub_desc;
        $new_sub->save();
        return redirect()->route('productos.show', $request->id_produ);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\categoria_detalle  $categoria_detalle
     * @return \Illuminate\Http\Response
     */
    public function edit(categoria_detalle $categoria_detalle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\categoria_detalle  $categoria_detalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categoria_detalle $categoria_detalle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categoria_detalle  $categoria_detalle
     * @return \Illuminate\Http\Response
     */
    public function destroy(categoria_detalle $categoria_detalle)
    {
        //
    }
}
