<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" align="center"><strong>{{ __('CONSULTAR CATEGORIAS') }}</strong> </h1>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 align="center"><strong>Realizar Consulta</strong></h3><br>
                    <form action="{{url('categoria/consulta')}}" method="POST">
		                @csrf
		                <div class="md-form">
			                <label><strong>NOMBRE</strong></label>
	                        <input required type="text" class="form-control input-sm" id="nombrePro" name="nombrePro">
	                    </div>
                    </form><br><br>
	                <button type="submit" class="btn btn-warning">Consultar</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>