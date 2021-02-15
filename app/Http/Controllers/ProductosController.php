<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function Listado(){
        //$producto = Producto::all();
        $producto = DB::table('productos as pro')
                    ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
                    ->select('pro.id','pro.nombreProducto', 'pro.cantidadProducto',
                            'pro.precioProducto','pro.fotoProducto', 'cat.nombreCategoria')
                    ->get();
        return view('Productos.productos_listado', ['producto' => $producto]); 
    }
    /**/

    public function RegistroForm(){
        $categoria = Categoria::all();
        return view('Productos.productos_registrar', compact('categoria'));
    }

    public function Registro(Request $request){
        $producto = new Producto();
        $producto->nombreProducto = $request->input('nombrePro');
        $producto->cantidadProducto = $request->input('cantidadPro');
        $producto->precioProducto = $request->input('precioPro');
        $producto->fotoProducto = $request->input('fotoPro');
        $producto->categoria = $request->input('categorias');
        $producto->save();
        return redirect()->route('listadoP');
    }

    public function ActualizarForm($id){
        $productos = Producto::findOrFail($id);
        $categoria = Categoria::all();
        return view('Productos.productos_actualizar', compact('productos','categoria'));
    }

    public function Actualizar(Request $request, $id){
        $producto = Producto::findOrFail($id);
        $producto->nombreProducto = $request->input('nombrePro');
        $producto->cantidadProducto = $request->input('cantidadPro');
        $producto->precioProducto = $request->input('precioPro');
        $producto->fotoProducto = $request->input('fotoPro');
        $producto->categoria = $request->input('categorias');
        $producto->save();
        return redirect()->route('listadoP');
    }

    public function Eliminar($id){
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('listadoP');
    }

    public function ConsultaForm(){
        return view('Productos.productos_consulta');
    }

    public function Consulta(Request $request){
        $nombre = $request->input('nombrePro');
        $producto = Producto::where('nombreProducto','like',$nombre)->first();
        if($producto)
            return view('Productos.productos_resultado', compact('producto'));
        else
            return view('Productos.productos_mensaje');
    }
}
