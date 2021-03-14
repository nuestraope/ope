@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Nuestra Ope | Quienes somos')])

@section('content')
    <div class="container" style="height: auto;position:relative">
        <div class="row justify-content-center">
            <div class="text-black col-lg-4 col-md-4"><h2>Redes Sociales</h2></div>
            <div class="text-black col-lg-9 col-md-9">
                Nuestra OPE estaba formado inicialmente por dos personas, somos tres actualmente:
                <ul>
                    <li><a href="https://www.youtube.com/channel/UC6eK4uuUTeFMWcBYJhZxhpA/videos">Youtube: https://www.youtube.com/channel/UC6eK4uuUTeFMWcBYJhZxhpA/videos</a>
                    </li>
                    <li><a href="https://www.facebook.com/NuestraOPE">Facebook: https://www.facebook.com/NuestraOPE</a>
                    </li>
                    <li><a href="mailto:nuestraope@gmail.com">Mail: nuestraope@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

