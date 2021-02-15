<x-app-layout>
    <x-slot name="header"><br>
        <h2 align="center" style="color: #01016D"><strong>LISTADO CATEGORIAS</strong></h2>
        <div align="center"><br><br>
            <table class="table table-sm table-secondary">
                <tr class="table table-row table-dark">
                    <td><strong>#</strong></td>
                    <td><strong>Nombre Categoria</strong></td>
                    <td><strong>Descripción</strong></td>
                    <td><strong>Accion</strong></td>
                </tr>
                <tr>
                    <td> {{ $categoria->id }} </td>
                    <td> {{ $categoria->nombreCategoria }} </td>
                    <td> {{ $categoria->descripcion }}</td>
                    <td>
                        <a href="{{url('categoria/listado')}}">
                            <button type="button" class="btn-sm btn-danger">REGRESAR</button>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </x-slot>
</x-app-layout>