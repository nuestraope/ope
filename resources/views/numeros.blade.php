@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Nuestra Ope | Quienes somos')])

@section('content')
    <div class="container" style="height: auto;position:relative">
        <div class="row justify-content-center">
            <div class="text-black col-lg-4 col-md-4"><h2>Nuestra Ope en números</h2></div>
            <div class="text-black col-lg-9 col-md-9">
                <ul>
                    <li>Más de 3.000 seguidores en YouTube.</li>
                    <li>Algunos de nuestros vídeos cuentan con más de 10.000 visualizaciones.</li>
                    <li>Tenemos más de 1.500 amigos en Facebook.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

