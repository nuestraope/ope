@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Nuestra Ope | Quienes somos')])

@section('content')
    <div class="container" style="height: auto;position:relative">
        <div class="row justify-content-center">
            <div class="text-black col-lg-6 col-md-6"><h2>¿Dónde seguirnos?</h2></div>
            <div class="text-black col-lg-9 col-md-9">
                Nuestra OPE estaba formado inicialmente por dos personas, somos tres actualmente:
                <ul>
                    <li><i class="material-icons">play_arrow</i>Youtube: aquí subimos todos nuestros vídeos. Si no quieres perderte ninguno, suscríbete al canal y dale a la campanita, de esta forma Youtube te avisará cuando haya un vídeo nuevo (¡ya sois más de 3000 seguidores!).<br /><a href="https://www.youtube.com/channel/UC6eK4uuUTeFMWcBYJhZxhpA/videos">https://www.youtube.com/channel/UC6eK4uuUTeFMWcBYJhZxhpA/videos</a>
                    </li>
                    <li><i class="material-icons">facebook</i>Facebook: desde esta red social compartimos nuestros vídeos y otra información de interés (infografías, vídeos de otras personas, webs útiles…). Si tienes Facebook y quieres ver más contenido del que compartimos en Youtube, síguenos (¡casi 2000 personas están pendientes de nuestro perfil!).<br /><a href="https://www.facebook.com/NuestraOPE">https://www.facebook.com/NuestraOPE</a>
                    </li>
                    <li><i class="material-icons">chat</i>
                        Twitter: recientemente nos hemos creado también perfil en Twitter. El contenido será parecido al de Facebook. ¡Síguenos desde donde más te guste!<br/><a href="https://twitter.com/NuestraOpe">https://twitter.com/NuestraOpe</a>
                    </li>
                    <li><i class="material-icons">email</i>Email: Si quieres ponerte en contacto con nosotros, aquí tienes nuestro correo: <br /><a href="mailto:nuestraope@gmail.com">Mail: nuestraope@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

