<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" align="center"><strong>{{ __('LISTADO CATEGORIAS') }}</strong> </h1>
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
                            <th scope="col">Descripción </th>
                        </tr>
                    </thead>
                    <tbody class="table table-striped table-secondary">
                        @foreach($categorias as $c)
                            <tr>
                                <th scope="col"> {{ $c->id }} </th>
                                <th scope="col"> {{ $c->nombreCategoria }} </th>
                                <th scope="col"> {{ $c->descripcion }}</th>
                                <th>
                                    <a href="">
                                        <button class="btn-sm btn-warning my-2 my-sm-0" type="submit" ><strong>ACTUALIZAR</strong></button>
                                    </a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>