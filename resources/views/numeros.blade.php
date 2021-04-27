@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Nuestra Ope | Quienes somos')])

@section('content')
    <div class="container" style="height: auto;position:relative">
        <div class="row justify-content-center">
            <div class="text-black col-lg-6 col-md-6"><h2>Nuestra Ope en números</h2></div>
            <div class="text-black col-lg-9 col-md-9">
                <ul>
                    <li>Más de 3.000 seguidores en YouTube.</li>
                    <li>Algunos de nuestros vídeos cuentan con más de 10.000 visualizaciones.</li>
                    <li>Tenemos más de 1.500 amigos en Facebook.</li>
                </ul>
                <div class="text-center">
                    <a href="https://www.facebook.com/NuestraOPE"><img class="numeros-imagenes" src="img/facebook.gif" title="Siguenos en Facebook"></a>
                    <a href="https://www.youtube.com/channel/UC6eK4uuUTeFMWcBYJhZxhpA/videos"><img  class="numeros-imagenes"src="img/youtube.gif" title="Siguenos en Youtube"></a>
                    <a href="https://twitter.com/NuestraOpe"><img src="img/twitter.gif" title="Siguenos en Twitter" class="numeros-imagenes"></a>
                    <a href="https://vm.tiktok.com/ZMe9X2Smm"><img src="img/tiktok.gif" title="Siguenos en Tiktok" class="numeros-imagenes"></a>
                </div>
            </div>
        </div>
    </div>
@endsection

