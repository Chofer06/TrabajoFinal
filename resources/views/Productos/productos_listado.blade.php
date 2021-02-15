<x-app-layout>
    <x-slot name="header"><br>
        <h1 align="center" style="color: #01016D"><strong>LISTADO PRODUCTOS</strong></h1><br>
        <table class="table table-sm table-secondary">
            <tr class="table table-row table-dark">
                <!--td><strong>#</strong></td-->
                <td><strong>Imagen</strong></td>
                <td><strong>Nombre</strong></td>
                <td><strong>Cantidad</strong></td>
                <td><strong>Precio</strong></td>
                <td><strong>Categoria</strong></td>
                <td>&emsp;</td>
                <td>&emsp;</td>
            </tr>
            @foreach($producto as $p)
            <tr>
                <!--td> {{$p->id}}</td-->
                <td><img src='{{url("/imagenes/$p->fotoProducto")}}' style="width : 100px; heigth : 1px"></td>
                <td> {{$p->nombreProducto}} </td>
                <td> {{$p->cantidadProducto}} </td>
                <td> {{$p->precioProducto}}</td>
                <td> {{$p->nombreCategoria}} </td>
                <td>
                    <a href="{{route('form_actualizapro', $p->id)}}">
                        <button class="btn-sm btn-success my-2 my-sm-1" type="submit" ><strong>ACTUALIZAR</strong></button>
                    </a>
                </td>
                <td>
                    <a href="{{route('eliminarpro', $p->id)}}">
                        <button class="btn-sm btn-danger my-2 my-sm-1" type="submit" ><strong>ELIMINAR</strong></button>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>   
    </x-slot>
</x-app-layout>