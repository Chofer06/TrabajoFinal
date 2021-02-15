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
}
