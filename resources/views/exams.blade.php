@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Nuestra Ope | Quienes somos')])

@section('content')
<div class="container" style="height: auto;position:relative">
  <div class="row justify-content-center">
      <div class="text-black col-lg-6 col-md-6"><h2>Exámenes</h2></div>
      <div class="text-black col-lg-9 col-md-9">
          <div>
              ¿Estás preparado para probarte a ti mismo? ¡Aquí te proponemos los examenes que más te ayudarán a aprobar!<br>
              ¡Entra constántemente y encontrarás nuevos retos!
          </div>
          <div class="exam">

              <h2>Exámen</h2>
              <ol>
                  @foreach ($exams as $exam)
                  <li><h3>{{ $exam->pregunta }}</h3></li>
                  <ol type="a">
                      <li>
                          @if ($exam->correcta == 1)<strong>@endif{{ $exam->respuesta1 }}@if ($exam->correcta == 1)</strong>@endif
                      </li>
                      <li>
                          @if ($exam->correcta == 2)<strong>@endif{{ $exam->respuesta2 }}@if ($exam->correcta == 2)</strong>@endif
                      </li>
                      <li>
                          @if ($exam->correcta == 3)<strong>@endif{{ $exam->respuesta3 }}@if ($exam->correcta == 3)</strong>@endif
                      </li>
                      <li>
                          @if ($exam->correcta == 4)<strong>@endif{{ $exam->respuesta4 }}@if ($exam->correcta == 4)</strong>@endif
                      </li>
                  </ol>
                  @endforeach
              </ol>
          </div>
      </div>
  </div>
</div>

@endsection

