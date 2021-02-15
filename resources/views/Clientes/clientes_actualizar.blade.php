<x-app-layout>
    <x-slot name="header"><br>
        <h1 align="center" style="color: #01016D"><strong>ACTUALIZAR CLIENTES</strong></h1>
        <div align="center"><br><br>
            <form action="{{route('actualizacli', $clientes->id)}}" method="POST">
                @csrf
                <table>
                    <tr align="center">
                        <td>
                            <div class="md-form">
                                <label><strong>NOMBRE</strong></label>
                                <input required type="text" class="form-control input-sm" value="{{$clientes->nombreCliente}}" id="nombreCli" name="nombreCli" style="width : 300px; heigth : 1px">
                            </div>
                        </td><td></td>
                        <td>
                            <div class="md-form">
                                <label><strong>CEDULA</strong></label>
                                <input required type="text" class="form-control input-sm" value="{{$clientes->cedulaCliente}}" id="cedulaCli" name="cedulaCli" style="width : 300px; heigth : 1px">
                            </div>
                        </td>
                    </tr>
                    <tr  align="center"><td>&emsp;</td></tr>
                    <tr  align="center">
                        <td>
                            <div class="md-form">
                                <label><strong>DIRECCION</strong></label>
                                <input required type="text" class="form-control input-sm" value="{{$clientes->direccionCliente}}" id="direccionCli" name="direccionCli" style="width : 300px; heigth : 1px">
                            </div>
                        </td>
                        <td>
                            <label>&emsp;</label>
                        </td>
                        <td>
                            <div class="md-form">
                                <label><strong>CORREO</strong></label>
                                <input required type="text" class="form-control input-sm" value="{{$clientes->emailCliente}}" id="correoCli" name="correoCli" style="width : 300px; heigth : 1px">
                            </div>
                        </td>
                    </tr>
                    <tr  align="center"><td>&emsp;</td></tr>
                    <tr  align="center">
                        <td>
                            <div class="md-form">
                                <label><strong>TELEFONO</strong></label>
                                <input required type="text" class="form-control input-sm" value="{{$clientes->telefonoCliente}}" id="telefonoCli" name="telefonoCli" style="width : 300px; heigth : 1px">
                            </div>
                        </td>
                        <td>
                            <label>&emsp;</label>
                        </td>
                        <td>
                            <div class="md-form">
                                <label><strong>GENERO</strong></label>
                                <input required type="text" class="form-control input-sm" value="{{$clientes->generoCliente}}" placeholder="M o F" id="generoCli" name="generoCli" style="width : 300px; heigth : 1px">
                            </div>
                        </td>
                    </tr>
                    <tr  align="center"><td>&emsp;</td></tr>
                </table>
                <div class="md-form">
                    <label><strong>FOTO</strong></label>
                    <input required type="file" class="form-control-file" value="{{$clientes->fotoCliente}}" id="fotoCli" name="fotoCli" style="width : 300px; heigth : 1px">
                </div><br><br>
                <button type="submit" class="btn-sm btn-success">Actualizar</button>
                <a href="{{url('cliente/listado')}}">
                    <button type="button" class="btn-sm btn-danger">Cancelar</button>
                </a>
            </form>
        </div>
    </x-slot>
</x-app-layout>