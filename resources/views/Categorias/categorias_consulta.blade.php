<x-app-layout>
    <x-slot name="header"><br>
        <h1 align="center" style="color: #01016D"><strong>CONSULTAR CATEGORIAS</strong> </h1>
        <div align="center"><br><br>
            <form action="{{route('consultacat')}}" method="POST">
                @csrf
                <div class="md-form">
                    <label><strong>NOMBRE CATEGORIA</strong></label>
                    <input required type="text" class="form-control input-sm" id="nombreCat" name="nombreCat" style="width : 300px; heigth : 1px">
                </div><br>
                <button type="submit" class="btn-sm btn-warning">Consultar</button>
                <a href="{{url('categoria/listado')}}">
                    <button type="button" class="btn-sm btn-danger">Regresar</button>
                </a>
            </form>
        </div>
    </x-slot>
    <H5 align="center" style="color: #ffffff"><strong><h5 style="background-color: #000000">© 2021 Copyright<br>David Fernando Mueses Mallama<br>Yolima Garley Quiroz Rosero</h5></strong></H5>
</x-app-layout>