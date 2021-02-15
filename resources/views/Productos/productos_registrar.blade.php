<x-app-layout>
    <x-slot name="header"><br>
        <h1 align="center" style="color: #01016D"><strong>REGISTRAR PRODUCTOS</strong></h1>
        <div align="center"><br><br>
            <form action="{{url('producto/registro')}}" method="POST">
                @csrf
                <table>
                    <tr align="center">
                        <td>
                            <div class="md-form">
                                <label><strong>NOMBRE</strong></label>
                                <input required type="text" class="form-control input-sm" id="nombrePro" name="nombrePro" style="width : 300px; heigth : 1px">
                            </div>
                        </td><td></td>
                        <td>
                            <div class="md-form">
                                <label><strong>CANTIDAD</strong></label>
                                <input required type="text" class="form-control input-sm" id="cantidadPro" name="cantidadPro" style="width : 300px; heigth : 1px">
                            </div>
                        </td>
                    </tr>
                    <tr  align="center"><td>&emsp;</td></tr>
                    <tr  align="center">
                        <td>
                            <div class="md-form">
                                <label><strong>PRECIO</strong></label>
                                <input required type="text" class="form-control input-sm" id="precioPro" name="precioPro" style="width : 300px; heigth : 1px">
                            </div>
                        </td>
                        <td>
                            <label>&emsp;</label>
                        </td>
                        <td>
                            <div class="md-form">
                                <label><strong>IMAGEN</strong></label>
                                <input required type="file" class="form-control-file" id="fotoPro" name="fotoPro" style="width : 300px; heigth : 1px">
                            </div>
                        </td>
                    </tr>
                    <tr  align="center"><td>&emsp;</td></tr>
                </table>
                <label><strong>CATEGORIA</strong></label><br>
                <select class="custom-select" id="categorias" name="categorias" style="width : 300px; heigth : 1px">
                    @foreach($categoria as $c)
                        <option value="{{$c->id}}">{{$c->nombreCategoria}}</option>
                    @endforeach
                </select>
                <br><br>
                <button type="submit" class="btn-sm btn-success">REGISTRAR</button>
                <a href="{{url('producto/listado')}}">
                    <button type="button" class="btn-sm btn-danger">REGRESAR</button>
                </a>
            </form>
        </div>
    </x-slot>
</x-app-layout>