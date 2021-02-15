<x-app-layout>
    <x-slot name="header"><br>
        <h1 align="center" style="color: #01016D"><strong>LISTADO PRODUCTOS</strong></h1><br>
        <table class="table table-sm table-secondary">
            <tr class="table table-row table-dark">
                <td><strong>#</strong></td>
                <td><strong>Imagen</strong></td>
                <td><strong>Nombre</strong></td>
                <td><strong>Cantidad</strong></td>
                <td><strong>Precio</strong></td>
                <td><strong>Categoria</strong></td>
                <td>&emsp;</td>
                <td>&emsp;</td>
            </tr>
            <tr>
                <td> {{$producto->id}}</td>
                <td><img src='{{url("/imagenes/$producto->fotoProducto")}}' style="width : 100px; heigth : 1px"></td>
                <td> {{$producto->nombreProducto}} </td>
                <td> {{$producto->cantidadProducto}} </td>
                <td> {{$producto->precioProducto}}</td>
                <td> {{$producto->nombreCategoria}} </td>
                <td>
                    <a href="{{url('producto/listado')}}">
                            <button type="button" class="btn-sm btn-danger">REGRESAR</button>
                        </a>
                </td>
            </tr>
        </table>   
    </x-slot>
</x-app-layout>