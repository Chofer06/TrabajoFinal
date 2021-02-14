<x-app-layout>
    <x-slot name="header"><br>
        <h1 align="center" style="color: #01016D"><strong>LISTADO CATEGORIAS</strong></h1>
        <div align="center"><br><br>
            <table class="table table-sm">
                <thead class="table table-striped table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre Categoria</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody class="table table-striped table-secondary">
                    @foreach($categoria as $c)
                    <tr>
                        <td scope="col"> {{ $c->id }} </td>
                        <td scope="col"> {{ $c->nombreCategoria }} </td>
                        <td scope="col"> {{ $c->descripcion }}</td>
                        <td>
                            <a href="{{route('form_actualizacat', $c->id)}}">
                                <button class="btn-sm btn-success my-2 my-sm-0" type="submit" ><strong>ACTUALIZAR</strong></button>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('eliminarcat', $c->id)}}">
                                <button class="btn-sm btn-danger my-2 my-sm-0" type="submit" ><strong>ELIMINAR</strong></button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-slot>
</x-app-layout>