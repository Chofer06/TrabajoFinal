<x-app-layout>
    <x-slot name="header"><br>
        <h2 align="center" style="color: #01016D"><strong>LISTADO CATEGORIAS</strong></h2>
        <div align="center"><br><br>
            <table class="table table-sm">
                <thead class="table table-striped table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre Categoria</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody class="table table-striped table-info">
                    <tr>
                        <td scope="col"> {{ $categoria->id }} </td>
                        <td scope="col"> {{ $categoria->nombreCategoria }} </td>
                        <td scope="col"> {{ $categoria->descripcion }}</td>
                        <td>
                            <a href="{{url('categoria/listado')}}">
                                <button type="button" class="btn-sm btn-danger">REGRESAR</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-slot>
</x-app-layout>