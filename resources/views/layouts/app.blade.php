<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ 'Nuestra OPE' }}</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('material') }}/img/favicon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
        {!! htmlScriptTagJsApi(['lang' => 'es']) !!}
        <link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
        <script data-ad-client="ca-pub-3155540888928146" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            /* ésto comprueba la localStorage si ya tiene la variable guardada */

        </script>
    </head>
    <body class="{{ $class ?? '' }}">
    <div id="cajacookies">
        <p><button onclick="aceptarCookies()" class="pull-right"><i class="fa fa-times"></i> Aceptar y cerrar éste mensaje</button>
            Éste sitio web usa cookies, si permanece aquí acepta su uso.
            Puede leer más sobre el uso de cookies en nuestra <a href="politica">política de privacidad</a>.
        </p>
    </div>
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.page_templates.auth')
        @endauth
        @guest()
            @include('layouts.page_templates.guest')
        @endguest
        @if (auth()->check())
        <div class="fixed-plugin" style="z-index: 9999">
          <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
              <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
              <li class="header-title">Color del Widget</li>
              <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger active-color">
                  <div class="badge-colors ml-auto mr-auto">
                    <span class="badge filter badge-purple" data-color="#9368E9"></span>
                    <span class="badge filter badge-azure" data-color="#2CA8FF"></span>
                    <span class="badge filter badge-green" data-color="#18ce0f"></span>
                    <span class="badge filter badge-warning" data-color="#ffeb3b"></span>
                    <span class="badge filter badge-danger" data-color="#f44336"></span>
                    <span class="badge filter badge-rose" data-color="#e91e63"></span>
                  </div>
                  <div class="clearfix"></div>
                </a>
              </li>
              <li class="header-title">Recompensas</li>
              <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="img/recomp/1.png" alt="">
                </a>
              </li>
              <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="img/recomp/2.png" alt="">
                </a>
              </li>
              <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="img/recomp/3.png" alt="">
                </a>
              </li>
              <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="img/recomp/4.png" alt="">
                </a>
              </li>
              <li class="button-container">
                <a onclick="alert('Recompensas en proceso de implementación.');" href="#" class="btn btn-primary btn-block">Descargar todas</a>
              </li>
              <li class="button-container">
                <a class="btn btn-default btn-block publicityLauncher">
                  Ver Anuncio
                </a>
              </li>
              <li class="button-container">
                <a href="https://www.youtube.com/channel/UC6eK4uuUTeFMWcBYJhZxhpA" target="_blank" class="btn btn-danger btn-block btn-round">
                  ¡Visitanos en Youtube!
                </a>
              </li>
              <li class="header-title">¡Gracias por visitarnos!</li>
              <li class="button-container text-center">
                      <button id="twitter" class="btn btn-round btn-twitter">
                          <a href="https://twitter.com/NuestraOpe" class="btn-social-login" style="color:white" target="_blank">
                              <i class="fa fa-twitter"></i></a>
                      </button>
                <button id="facebook" class="btn btn-round btn-facebook">
                    <a href="https://www.facebook.com/NuestraOPE" class="btn-social-login" style="color:white" target="_blank">
                        <i class="fa fa-facebook-f"></i>
                    </a>
                </button>
                <br>
                <br>
              </li>
                <li class="button-container">
                    <a href="{{ route('logout') }}" class="btn btn-link btn-block btn-round">Desconectarse</a>
                </li>
            </ul>
          </div>
        </div>
        @endif
        <!--   Core JS Files   -->
        <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
        <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
        <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
        <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!-- Plugin for the momentJs  -->
        <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
        <!--  Plugin for Sweet Alert -->
        <script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script>
        <!-- Forms Validations Plugin -->
        <script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
        <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="{{ asset('material') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
        <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js"></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
        <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
        <script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script>
        <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script>
        <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js"></script>
        <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
        <script src="{{ asset('material') }}/js/plugins/fullcalendar.min.js"></script>
        <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
        <script src="{{ asset('material') }}/js/plugins/jquery-jvectormap.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="{{ asset('material') }}/js/plugins/nouislider.min.js"></script>
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <!-- Library for adding dinamically elements -->
        <script src="{{ asset('material') }}/js/plugins/arrive.min.js"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE'"></script>
        <!-- Chartist JS -->
        <script src="{{ asset('material') }}/js/plugins/chartist.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('material') }}/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src="{{ asset('material') }}/demo/personal.js"></script>
        <script src="{{ asset('material') }}/js/settings.js"></script>

        @stack('js')
    </body>
</html>
