<x-app-layout>
    <x-slot name="header"><br>
        <div class="container">
            <div class="row">
                <div class="col-md-4"> 
                    <div class="card">
                        <!--img src="{{url('imagenes/1.jpg')}}" height="480" width="1100"-->
                        <img class="card-img-top" height="240" src="{{url('imagenes/11.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title" align="center"><strong>MISIÓN</strong></h4>
                            <p class="card-text" id="msg" align="justify"> 
                                Somos una empresa dedicada al desarrollo de software personalizado que implementa 
                                diferentes metodologías agiles de desarrollo y control de nuestro producto software, 
                                lo cual nos permite crear aplicaciones que impulsan grandes proyectos y procesos 
                                exitosos garantizando un servicio excepcional al cliente.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"> 
                    <div class="card">
                        <img class="card-img-top" height="240" src="{{url('imagenes/10.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                            <h4 class="card-title" align="center"><strong>VISIÓN</strong></h4>
                                <p class="card-text" id="msg" align="justify"> 
                                    Pretendemos ser una empresa con una evolución constante en el aprendizaje, 
                                    por medio de la cual brinde mejores soluciones a las necesidades cambiantes 
                                    provocadas por diferentes circunstancias necesitadas por nuestros clientes, 
                                    creando soluciones innovadoras y así generando ventajas competitivas.
                                </p>
                            </div>
                        </div>
                    </div>
                <div class="col-md-4"> 
                    <div class="card">
                        <img class="card-img-top" height="240" src="{{url('imagenes/12.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title" align="center"><strong>VALORES</strong></h4>
                            <p class="card-text" id="msg">
                                Respeto <br>
                                Atención al cliente <br>
                                Servicio <br>
                                Responsabilidad <br>
                                Confiabilidad <br>
                                Honestidad <br>
                                Sinceridad <br>
                                Empatia <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    <H5 align="center" style="color: #ffffff"><strong><h5 style="background-color: #000000">© 2021 Copyright<br>David Fernando Mueses Mallama<br>Yolima Garley Quiroz Rosero</h5></strong></H5>
</x-app-layout>