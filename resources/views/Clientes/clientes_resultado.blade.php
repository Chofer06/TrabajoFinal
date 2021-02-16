<x-app-layout>
    <x-slot name="header"><br>
        <h2 align="center" style="color: #01016D"><strong>LISTADO CLIENTES</strong></h2>
        <div align="center"><br><br>
        <table class="table table-sm table-secondary">
            <tr class="table table-row table-dark">
                <td><strong>#</strong></td>
                <td><strong>FOTO</strong></td>
                <td><strong>NOMBRE</strong></td>
                <td><strong>CEDULA</strong></td>
                <td><strong>DIRECCION</strong></td>
                <td><strong>EMAIL</strong></td>
                <td><strong>TELEFONO</strong></td>
                <td><strong>GENERO</strong></td>
                <td><strong>ACCIONES</strong></td>
            </tr>
            <tr>
                <td> {{$cliente->id}}</td>
                <td><img src='{{url("/imagenes/$cliente->fotoCliente")}}' style="width : 60px; heigth : 1px"></td>
                <td> {{$cliente->nombreCliente}} </td>
                <td> {{$cliente->cedulaCliente}} </td>
                <td> {{$cliente->direccionCliente}}</td>
                <td> {{$cliente->emailCliente}} </td>
                <td> {{$cliente->telefonoCliente}} </td>
                @if($cliente->generoCliente == 'M' || $cliente->generoCliente == 'm')
                    <td>Masculino</td>
                @endif
                @if($cliente->generoCliente == 'F' || $cliente->generoCliente == 'f')
                    <td>Femenino</td>
                @endif
                
                <td>
                    <a href="{{route('form_actualizacli', $cliente->id)}}">
                        <button class="btn-sm btn-success my-2 my-sm-1" type="submit" ><strong>ACTUALIZAR</strong></button>
                    </a>
                </td>
            </tr>
        </table>
        </div>
    </x-slot>
    <H5 align="center" style="color: #ffffff"><strong><h5 style="background-color: #000000">© 2021 Copyright<br>David Fernando Mueses Mallama<br>Yolima Garley Quiroz Rosero</h5></strong></H5>
</x-app-layout>