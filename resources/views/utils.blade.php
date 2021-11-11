@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Nuestra Ope | Quienes somos')])

@section('content')
<div class="container" style="height: auto;position:relative">
  <div class="row justify-content-center">
      <div class="text-black col-lg-6 col-md-6"><h2>Contacto</h2></div>
      <div class="text-black col-lg-9 col-md-9">
          <div>
              Aquí encontrarás una serie de herramientas que te ayudarán con tu proceso de aprendizaje. ¡Nunca dejes de entrar, te sorprenderá!
              <ul>
                  <li>
                      <a href="pomodoro">Técnica Pomodoro</a>
                  </li>
              </ul>
          </div>
     </div>
  </div>
</div>

@endsection

