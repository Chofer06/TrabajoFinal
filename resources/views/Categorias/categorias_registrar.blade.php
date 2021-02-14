<x-app-layout>
    <x-slot name="header"><br>
        <h1 align="center" style="color: #01016D"><strong>REGISTRAR CATEGORIAS</strong></h1>
        <div align="center"><br><br>
            <form action="{{url('categoria/registro')}}" method="POST">
                @csrf
                <div class="md-form">
                    <label><strong>NOMBRE CATEGORIA</strong></label>
                    <input type="text" class="form-control input-sm" id="nombreCat" name="nombreCat" required style="width : 300px; heigth : 1px">
                </div><br>
                <div class="mb_form">
                    <label ><strong>DESCRIPCIÓN</strong></label>
                    <input type="text" class="form-control input-sm" id="descripcionCat" name="descripcionCat" required style="width : 300px; heigth : 1px">
                </div><br>
                <button type="submit" class="btn-sm btn-primary">AGREGAR</button>
            </form>
        </div>
    </x-slot>
</x-app-layout>