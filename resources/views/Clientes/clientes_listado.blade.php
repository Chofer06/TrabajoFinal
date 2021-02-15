<x-app-layout>
    <x-slot name="header"><br>
        <h1 align="center" style="color: #01016D"><strong>LISTADO CLIENTES</strong></h1><br>
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
                <td colspan="2" align="center"><strong>ACCIONES</strong></td>
            </tr>
            @foreach($cliente as $c)
            <tr>
                <td> {{$c->id}}</td>
                <td><img src='{{url("/imagenes/$c->fotoCliente")}}' style="width : 60px; heigth : 1px"></td>
                <td> {{$c->nombreCliente}} </td>
                <td> {{$c->cedulaCliente}} </td>
                <td> {{$c->direccionCliente}}</td>
                <td> {{$c->emailCliente}} </td>
                <td> {{$c->telefonoCliente}} </td>
                @if($c->generoCliente == 'M')
                    <td>Masculino</td>
                @endif
                @if($c->generoCliente == 'F')
                    <td>Femenino</td>
                @endif
                <td align="center">
                    <a href="{{route('form_actualizapro', $c->id)}}">
                        <button class="btn-sm btn-success my-2 my-sm-1" type="submit" ><strong>ACTUALIZAR</strong></button>
                    </a>&nbsp;
                    <a href="{{route('eliminarpro', $c->id)}}">
                        <button class="btn-sm btn-danger my-2 my-sm-1" type="submit" ><strong>ELIMINAR</strong></button>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>   
    </x-slot>
</x-app-layout>