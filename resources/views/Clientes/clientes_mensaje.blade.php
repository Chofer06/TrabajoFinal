<x-app-layout>
    <x-slot name="header"><br>
        <h1 align="center" style="color: #01016D"><strong>CONSULTAR CLIENTE</strong></h1>
        <div align="center"><br><br>
            <h3><strong>Cliente No Encontrado</strong></h3>
            <h3><strong>Desea Realizar Otra Consulta</strong></h3><br>
            <a href="{{url('cliente/consulta')}}">
                <button type="button" class="btn-sm btn-success">SI</button>
            </a>
            <a href="{{url('cliente/listado')}}">
                <button type="button" class="btn-sm btn-danger">NO</button>
            </a>
        </div>
    </x-slot>
</x-app-layout>