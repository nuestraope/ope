@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Nuestra Ope | Quienes somos')])

@section('content')
<div class="container" style="height: auto;position:relative">
  <div class="row justify-content-center">
      <div class="text-black col-lg-4 col-md-4"><h2>Nuestra historia</h2></div>
      <div class="text-black col-lg-9 col-md-9">
          Nuestra OPE surgió en 2018.
          Ante una época de muchas oposiciones sanitarias en España, quisimos aportar nuestro granito de arena facilitando al opositor la comprensión de los temas que más nos suelen desagradar, como es el bloque de legislación.
          Continuamos intentando ofrecer información valiosa durante el estado de alarma, con vídeos acerca del coronavirus y de tipos de mascarillas.
          Más adelante nos zambullimos en el mundo de los electrocardiogramas, para que al verlos no nos supongan un jeroglífico sino el resultado de una prueba, que es de lo que trata.
          Hemos progresado en entretenimiento, presentaciones, imagen y sonido.
          Y todo de forma altruista. Es gratis, y siempre lo será.

      </div>
      <div class="text-black col-lg-4 col-md-4"><h2>Equipo</h2></div>
      <div class="text-black col-lg-9 col-md-9">
          Nuestra OPE estaba formado inicialmente por dos personas, somos tres actualmente:
          <ul>
              <li>Juan: nuestra incorporación más reciente. Es nuestro informático, el genio que, con su magia, va a convertir y dirigir las difusas ideas del proyecto en algo que podáis ver.</li>
              <li>Óscar: edita los vídeos y los sube a YouTube. En uno de ellos le oísteis cantar la musiquita del opening. Es un trasto y tengo que tener cuidado de que no haga travesuras como introducir Calamardos ocultos en mis vídeos. Es una de las personas más frikis que conozco, tiene un canal de YouTube propio de videojuegos, y en TikTok está todo el día dándole que te pego con Dragon Ball.</li>
              <li>Eva: la enfermera que se busca las vueltas para explicaros las cosas de forma que se entiendan. He trabajado en hospitalización (trauma, cirugía, neurología, infecciosos, neumología, medicina interna, urología, otorrino, cardio), urgencias, farmacia y UCI.</li>
          </ul>
      </div>
  </div>
</div>
    <img width="400px" src="img/calamardo.png"/>
@endsection

