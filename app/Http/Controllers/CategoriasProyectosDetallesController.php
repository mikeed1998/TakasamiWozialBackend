<?php

namespace App\Http\Controllers;

use App\CategoriasProyectos;
use App\CategoriasProyectosDetalles;
use Illuminate\Http\Request;

class CategoriasProyectosDetallesController extends Controller
{
    public function index() {
        $categorias = CategoriasProyectosDetalles::latest()->paginate(5);
     
        return view('admin.contenido.proyectos.index',compact('categorias'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create() {
        $cat = CategoriasProyectos::all();

        return view('admin.contenido.proyectos.create', compact('cat'));
    }

    public function storep(Request $request) {
        $request->validate([
            'categoria_n' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
   
        $input = $request->all();
   
        if ($imagen = $request->file('imagen')) {
            $destinationPath = 'img2/photos/proyectos/';
            $profileImage = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($destinationPath, $profileImage);
            $input['imagen'] = "$profileImage";
        }

        if ($logo = $request->file('logo')) {
            $destinationPath2 = 'img2/photos/proyectos/logos/';
            $profileLogo = date('YmdHis') . "." . $logo->getClientOriginalExtension();
            $logo->move($destinationPath2, $profileLogo);
            $input['logo'] = "$profileLogo";
        }
     
        CategoriasProyectosDetalles::create($input);
      
        return redirect()->route('cont.proyectos.index')
                        ->with('success','Product created successfully.');
    }

    public function show(CategoriasProyectosDetalles $cat) {
        return view('admin.contenido.proyectos.create', compact('cat'));
    }

    public function edit() {
        
    }

    public function update() {
        
    }

    public function destroy(CategoriasProyectosDetalles $cpd) {
        $cpd->delete();
      
        return redirect()->route('cont.proyectos.index')
                        ->with('success','Product deleted successfully');
    }
}
