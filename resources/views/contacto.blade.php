@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Nuestra Ope | Quienes somos')])

@section('content')
<div class="container" style="height: auto;position:relative">
  <div class="row justify-content-center">
      <div class="text-black col-lg-6 col-md-6"><h2>Contacto</h2></div>
      <div class="text-black col-lg-9 col-md-9">
          <div>
              ¿Quieres contactar con nosotros? Rellena el siguiente formulario que estaremos encantados de contestar todas tus dudas. ¡Gracias por visitarnos!<br/><br/>
          </div>
          <form method="post" class="wpcf7-form" novalidate="novalidate">
              <p><label for="your-name">Nombre y Apellidos (campo obligatorio)</label><br />
              <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" id ="NameInputEmail1" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </p>
              <p><label for="your-name">E-mail (campo obligatorio)</label><br />
                  <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" id="InputEmail1" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </p>
              <p><label for="your-name">Asunto</label><br />
              <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" id="subjectEmail1" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> </p>
              <p><label for="your-name">Mensaje</label><br />
              <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" id="bodyEmail1" aria-invalid="false" style="width:40%"></textarea></span> </p>
          <p><input type="button" value="Enviar" class="wpcf7-form-control wpcf7-submit" onclick="parent.location='mailto:nuestraope@gmail.com?subject=' +document.getElementById('subjectEmail1').value+'&body='+document.getElementById('NameInputEmail1').value+ ' (' + document.getElementById('InputEmail1').value+ '): ' + document.getElementById('bodyEmail1').value" /></p><br/>
          </form>

      </div>
  </div>
</div>

@endsection

