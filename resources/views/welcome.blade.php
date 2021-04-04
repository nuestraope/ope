@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Nuestra Ope')])

@section('content')
<div class="container" style="height: auto;position:relative">
  <div class="row justify-content-center">
      <div class="col-lg-9 col-md-9 videocontainer">
          <div class="video-main">
              <iframe width="730" height="410" src="https://www.youtube.com/embed/DIyzEiFMeHk?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class = "col-lg-12 col-md-12 thumbcontainer">
              <img src="img/slider-left.png" height="80px" width="15px"/>
              <img src="img/video1.png" height="80px" class="thumbitem mini1"/>
              <img src="img/video2.png" height="80px" class="thumbitem mini2"/>
              <img src="img/video3.png" height="80px" class="thumbitem mini3"/>
              <img src="img/video4.png" height="80px" class="thumbitem mini4"/>
              <img src="img/slider-right.png" height="80px" width="15px"/>
          </div>
      </div>

  </div>
</div>
@endsection

@include('layouts.navbars.sidebar-right')
