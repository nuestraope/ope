@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Nuestra Ope | Quienes somos')])

@section('content')
    <div class="container" style="height: auto;position:relative">
        <div class="row justify-content-center">
            <div class="text-black col-lg-6 col-md-6"><h2>Creo que te has perdido</h2></div>
            <div class="text-black col-lg-9 col-md-9">
                ¡Pero no te preocupes! ¡Calamardo te lleva a tu destino!

            </div>
            <div class="text-left">
                <img width="400px" src="img/calamardo.png"/>
            </div>
            <div class="text-center text-black ">
                A ver, no seas Bob Esponja. ¿Dónde vamos?
                <ul style="list-style-type:none">
                    <li>
                        <a href="rrss">¿Quieres ver nuestras redes sociales?</a>
                    </li>
                    <li>
                        <a href="http://nuestraope.es">¿Quieres ir a la página principal?</a>
                    </li>
                    <li>
                        <a href="quienes-somos">¿Quieres saber quienes somos?</a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UC6eK4uuUTeFMWcBYJhZxhpA">Mira, mejor pasa de la web. ¡Mira que canal de Youtube tan chulo!</a>
                    </li>
                </ul>
            </div>
            </div>

    </div>

@endsection
