<x-app-layout>
    <x-slot name="header"><br>
        <h1 align="center" style="color: #01016D"><strong>LISTADO CATEGORIAS</strong></h1>
        <div align="center"><br><br>
            <table class="table table-sm table-secondary">
                <tr class="table table-row table-dark">
                    <td><strong>#</strong></td>
                    <td><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Nombre Categoria</strong></td>
                    <td><strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Descripción</strong></td>
                    <td>&emsp;</td><td>&emsp;</td>
                </tr>
                @foreach($categoria as $c)
                <tr align="center">
                    <td> {{ $c->id }} </td>
                    <td> {{ $c->nombreCategoria }} </td>
                    <td> {{ $c->descripcion }}</td>
                    <td>
                        <a href="{{route('form_actualizacat', $c->id)}}">
                            <button class="btn-sm btn-success my-2 my-sm-1" type="submit" ><strong>ACTUALIZAR</strong></button>
                        </a>
                    </td>
                    <td>
                        <a href="{{route('eliminarcat', $c->id)}}">
                            <button class="btn-sm btn-danger my-2 my-sm-1" type="submit" ><strong>ELIMINAR</strong></button>
                        </a>
                    </td>
                </tr>
                 @endforeach
            </table>
        </div>
    </x-slot>
    <H5 align="center" style="color: #ffffff"><strong><h5 style="background-color: #000000">© 2021 Copyright<br>David Fernando Mueses Mallama<br>Yolima Garley Quiroz Rosero</h5></strong></H5>
</x-app-layout>