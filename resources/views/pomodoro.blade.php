@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Nuestra Ope | Quienes somos')])

@section('content')
<div class="container" style="height: auto;position:relative">
  <div class="row justify-content-center">
      <div class="text-black col-lg-6 col-md-6"><h2>Técnica Pomodoro</h2></div>
      <div class="text-black col-lg-9 col-md-9">
          <div>
              La técnica Pomodoro consiste en estudiar en intervalos de 25 minutos con espacio de 5 minutos de descanso entre cada sesión de estudio.<br/>
              Tras 4 Pomodoros, puedes hacer la pausa más larga si lo necesitas. Esto hace que tu tiempo de estudio no sea tan pesado y puedas rendir mejor.<br/>
              ¿No tienes reloj para medir tus pomodoros? No hay problema, ¡te lo ponemos nosotros!
          </div><br/><br/>
          <div id="countdown_pomodoro">
          </div>
          <div id="restart_pomodoro">
              <i class="material-icons">restart_alt</i>
          </div>
          <script>
              var ahora = new Date();
              var end = new Date();
              end.setTime(ahora.getTime() + (25 * 60 * 1000));

              var _second = 1000;
              var _minute = _second * 60;
              var _hour = _minute * 60;
              var _day = _hour * 24;
              var timer;

              function showRemaining() {
                  var now = new Date();
                  var distance = end - now;
                  if (distance < 0) {

                      clearInterval(timer);
                      document.getElementById('countdown_pomodoro').innerHTML = '¡A descansar!';
                      var audio = new Audio('img/sound.wav');
                      audio.play();
                      return;
                  }
                  var minutes = Math.floor((distance % _hour) / _minute);
                  var seconds = Math.floor((distance % _minute) / _second);

                  document.getElementById('countdown_pomodoro').innerHTML = minutes + ' minutos<br/><br/>';
                  document.getElementById('countdown_pomodoro').innerHTML += seconds + ' segundos';
              }

              timer = setInterval(showRemaining, 1000);
              var b = document.querySelector('#restart_pomodoro i');
              b.setAttribute('mark', timer);
          </script>
     </div>
  </div>
</div>

@endsection

