<x-app-layout>
    <x-slot name="header">
        <h2 align="center"><strong>{{ __('LISTADO CATEGORIAS') }}</strong></h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table class="table table-sm">
                    <thead class="table table-striped table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre Categoria</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table table-striped table-info">
                        @foreach($categoria as $c)
                            <tr>
                                <td scope="col"> {{ $c->id }} </td>
                                <td scope="col"> {{ $c->nombreCategoria }} </td>
                                <td scope="col"> {{ $c->descripcion }}</td>
                                <td>
                                    <a href="{{route('form_actualizacat', $c->id)}}">
                                        <button class="btn-sm btn-primary my-2 my-sm-0" type="submit" ><strong>ACTUALIZAR</strong></button>
                                    </a>
                                </td>
                                <td>
                                    <a href="categoria/eliminar">
                                        <button class="btn-sm btn-danger my-2 my-sm-0" type="submit" ><strong>ELIMINAR</strong></button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>