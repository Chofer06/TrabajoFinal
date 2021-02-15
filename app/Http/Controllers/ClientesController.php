<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function Listado(){
        $cliente = Cliente::all();
        return view('CLientes.clientes_listado', ['cliente' => $cliente]);
    }

    public function RegistroForm(){
        $cliente = Cliente::all();
        return view('CLientes.clientes_registrar', compact('cliente'));
    }

    public function Registro(Request $request){
        $cliente = new Cliente();
        $cliente->nombreCliente = $request->input('nombreCli');
        $cliente->cedulaCliente = $request->input('cedulaCli');
        $cliente->direccionCliente = $request->input('direccionCli');
        $cliente->emailCliente = $request->input('correoCli');
        $cliente->telefonoCliente = $request->input('telefonoCli');
        $cliente->generoCliente = $request->input('generoCli');
        $cliente->fotoCliente = $request->input('fotoCli');
        $cliente->save();
        return redirect()->route('listadoC');
    }

    public function ActualizarForm($id){
        $clientes = Cliente::findOrFail($id);
        return view('Clientes.clientes_actualizar', compact('clientes'));
    }

    public function Actualizar(Request $request, $id){
        $cliente = Cliente::findOrFail($id);
        $cliente->nombreCliente = $request->input('nombreCli');
        $cliente->cedulaCliente = $request->input('cedulaCli');
        $cliente->direccionCliente = $request->input('direccionCli');
        $cliente->emailCliente = $request->input('correoCli');
        $cliente->telefonoCliente = $request->input('telefonoCli');
        $cliente->generoCliente = $request->input('generoCli');
        $cliente->fotoCliente = $request->input('fotoCli');
        $cliente->save();
        return redirect()->route('listadoC');
    }

    public function ConsultaForm(){
        return view('Clientes.clientes_consulta');
    }

    public function Consulta(Request $request){
        $nombre = $request->input('nombreCli');
        $cliente = Cliente::where('nombreCliente','like',$nombre)->first();
        if($cliente)
            return view('Clientes.clientes_resultado', compact('cliente'));
        else
            return view('Clientes.clientes_mensaje');
    }
}
