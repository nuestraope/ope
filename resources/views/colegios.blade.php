@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Nuestra Ope | Quienes somos')])

@section('content')
    <div class="container" style="height: auto;position:relative">
        <div class="row justify-content-center">
            <div class="text-black col-lg-6 col-md-6"><h2>Colegios de enfermería</h2></div>
            <div class="text-black col-lg-9 col-md-9">
                Os facilito un listado con los colegios de enfermería que hay en España.<br/>
                Supongo que cada uno conoce el de la provincia en la que trabaja, pero lo útil de este listado es que le eches un ojo a la web del resto de los colegios. Los hay con aportaciones muy útiles, con apartados como formación, empleo, protocolos… De cara a una oposición, si es para una provincia en la que ni trabajas ni resides, puede también aportarte mucho.<br/>
                <br/>
                <ul>
                    <h5 class="school-header">Colegio de Enfermería - Álava</h5>
                        Senda de los Canónigos, 2 - 1002 - Vitoria-Gasteiz - ALAVA<br/>
                        Teléfono: 945274877<br/>
                        Email: <a href="mailto:colegio@enfermerialava.org">colegio@enfermerialava.org</a><br/>
                        Web: <a href="http://www.enfermerialava.org">http://www.enfermerialava.org</a><br/>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

