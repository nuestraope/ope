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
                  <li><h3>¿Cómo se calcula el gasto cardíaco?</h3></li>
                  <ol type="a">
                      <li>
                          El doble de la frecuencia cardíaca más el doble del volumen sistólico
                      </li>
                      <li>
                          <strong>El volumen sistólico multiplicado por la frecuencia cardíaca durante un minuto</strong>
                      </li>
                      <li>
                          La frecuencia cardíaca multiplicada por el doble del volumen sistólico durante un minuto
                      </li>
                      <li>
                          El volumen sistólico dividido por la frecuencia cardíaca
                      </li>
                  </ol>
                  <li><h3>¿Qué señala la onda P?</h3>
                      <ol type="a">
                          <li>
                              Tiempo que el impulso emplea para desplazarse a través de la aurícula hasta el nodo AV, el haz de Hiss y fibras de Purkinje y a través de los ventrículos
                          </li>
                          <li>
                              <strong>Actividad eléctrica asociada con el impulso del nodo SA y la despolarización de la aurícula
                              </strong>
                          </li>
                          <li>
                              Despolarización eléctrica y contracción de los ventrículos
                          </li>
                          <li>
                              Fase de recuperación o de repolarización de los ventrículos
                          </li>
                      </ol>
                  </li>
                  <li><h3>¿Cómo se llama el sistema de conducción del impulso cardíaco a través de la aurícula izquierda?
                      </h3>
                      <ol type="a">
                          <li>
                              <strong>Haz de Bachman</strong>
                          </li>
                          <li>
                              Nódulo sinusal
                          </li>
                          <li>
                              Haz de His
                          </li>
                          <li>
                              Haz internodal
                          </li>
                      </ol></li>
                  <li><h3>¿A qué onda corresponde la repolarización ventricular?
                      </h3>
                      <ol type="a">
                          <li>
                              Onda U
                          </li>
                          <li>
                              <strong>Onda T
                              </strong>

                          </li>
                          <li>
                              Complejo QRS

                          </li>
                          <li>
                              Onda P
                          </li>
                      </ol></li>
                  <li><h3>¿Qué incluye la definición de “Comunidad”?
                      </h3>
                      <ol type="a">
                          <li>
                              Un ámbito geográfico
>
                          </li>
                          <li>
                              La interdependencia de sus miembros


                          </li>
                          <li>
                              El sentido de pertenencia


                          </li>
                          <li>
                              <strong>Todas son correctas</strong>

                          </li>
                      </ol></li>
              </ol>
          </div>
      </div>
  </div>
</div>

@endsection

