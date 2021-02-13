<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" align="center"><strong>{{ __('REGISTRAR CATEGORIAS') }}</strong> </h1>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{url('categoria/registro')}}" method="POST">
                        @csrf
                        <div class="md-form">
                            <label><strong>Nombre Categoria</strong></label>
                            <input type="text" class="form-control input-sm" id="nombreCat" name="nombreCat" required style="width : 300px; heigth : 1px">
                        </div>
                        <div class="mb_form mb-3">
                            <label ><strong>Descripción</strong></label>
                            <input type="text" class="form-control input-sm" id="descripcionCat" name="descripcionCat" required style="width : 300px; heigth : 1px">
                        </div>
                        <button type="submit" class="btn-sm btn-primary">AGREGAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>