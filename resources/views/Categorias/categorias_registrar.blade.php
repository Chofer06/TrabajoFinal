<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" align="center"><strong>{{ __('REGISTRAR CATEGORIAS') }}</strong> </h1>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <form action="{{url('categoria/registro')}}" method="POST">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nombre Categoria" aria-label="nombre" aria-describedby="basic-addon1" id="nombreCat" name="nombreCat" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">*.*</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Descripción" aria-label="descripcion" aria-describedby="basic-addon1" id="descripcionCat" name="descripcionCat" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">AGREGAR</button>
                                </form>
                            </div>
                            <div class="col-sm-8">
                                <div id="tablaCategoriaLoad"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>