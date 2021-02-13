<x-app-layout>
    <x-slot name="header">
        <h1 align="center"><strong>{{ __('ACTUALIZAR CATEGORIAS') }}</strong></h1>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('actualizacat', $categoria->id)}}" method="POST">
                        @csrf
                        <div class="md-form">
                            <label><strong>Nombre Categoria</strong></label>
                            <input required type="text" class="form-control input-sm" value="{{$categoria->nombreCategoria}}" id="nombreCat" name="nombreCat" style="width : 300px; heigth : 1px">
                        </div>
                        <div class="md-form">
                            <label><strong>Descripción</strong></label>
                            <input required type="text" class="form-control input-sm" value="{{$categoria->descripcion}}" id="descripcionCat" name="descripcionCat" style="width : 300px; heigth : 1px">
                        </div>
                        <button type="submit" class="btn-sm btn-success">Actualizar</button>
                        <a href="{{url('categoria/listado')}}">
                            <button type="button" class="btn-sm btn-danger">Cancelar</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>