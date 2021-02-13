<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class CategoriasController extends Controller
{
    public function Listado(){
        $categorias = Categoria::all();
        return view('Categorias.categorias_listado', ['categorias' => $categorias]);
    }

    public function RegistroForm(){
        $categoria = Categoria::all();
        return view('Categorias.categorias_registrar', compact('categoria'));
    }

    public function Registro(Request $request){
        $category = new Categoria();
        $category->nombreCategoria = $request->input('nombreCat');
        $category->descripcion = $request->input('descripcionCat');
        $category->save();
        return redirect()->route('listado');
    }

    public function Consulta(){
        $categorias = Categoria::all();
        return view('Categorias.categorias_consulta', ['categorias' => $categorias]);
    }

}
