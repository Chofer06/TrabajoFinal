<x-app-layout>
    <x-slot name="header">
        <h1 align="center" style="color: #01016D"><strong>Bienvenidos Tu Panaderia Favorita :)</strong></h1><br>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{url('imagenes/13.jpg')}}" class="d-block w-100" alt="..." height ="550">
                </div>
                <div class="carousel-item">
                    <img src="{{url('imagenes/14.jpg')}}" class="d-block w-100" alt="..." height ="550">
                </div>
                <div class="carousel-item">
                    <img src="{{url('imagenes/15.jpg')}}" class="d-block w-100" alt="..." height ="550">
                </div>
                <div class="carousel-item">
                    <img src="{{url('imagenes/16.jpg')}}" class="d-block w-100" alt="..." height ="550">
                </div>
                <div class="carousel-item">
                    <img src="{{url('imagenes/17.jpg')}}" class="d-block w-100" alt="..." height ="550">
                </div>
                <div class="carousel-item">
                    <img src="{{url('imagenes/18.jpg')}}" class="d-block w-100" alt="..." height ="550">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </x-slot>
    <H5 align="center" style="color: #ffffff"><strong><h5 style="background-color: #000000">© 2021 Copyright<br>David Fernando Mueses Mallama<br>Yolima Garley Quiroz Rosero</h5></strong></H5>
</x-app-layout>
