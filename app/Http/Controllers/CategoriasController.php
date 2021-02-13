<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class CategoriasController extends Controller
{
    public function Listado(){
        $categoria = Categoria::all();
        return view('Categorias.categorias_listado', ['categoria' => $categoria]);
    }

    public function RegistroForm(){
        $categoria = Categoria::all();
        return view('Categorias.categorias_registrar', compact('categoria'));
    }

    public function Registro(Request $request){
        $categoria = new Categoria();
        $categoria->nombreCategoria = $request->input('nombreCat');
        $categoria->descripcion = $request->input('descripcionCat');
        $categoria->save();
        return redirect()->route('listado');
    }

    public function ActualizarForm($id){
        $categoria = Categoria::findOrFail($id);
        return view('Categorias.categorias_actualizar', compact('categoria'));
    }

    public function Actualizar(Request $request, $id){
        $categoria = Categoria::findOrFail($id);
        $categoria->nombreCategoria = $request->input('nombreCat');
        $categoria->descripcion = $request->input('descripcionCat');
        $categoria->save();
        return redirect()->route('listado');
    }

    /*public function Consulta(){
        $categorias = Categoria::all();
        return view('Categorias.categorias_consulta', ['categorias' => $categorias]);
    }*/

}
