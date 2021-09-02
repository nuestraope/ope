@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Nuestra Ope')])

@section('content')
    <div class="container" style="height: auto;position:relative;">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-5 videocontainer">
                <div class="video-main">
                    <iframe src="img/vid/uyufytichbi.mp4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class = "col-lg-12 col-md-12 thumbcontainer">
                    <img src="img/slider-left.png" height="70px" width="15px" class="slider-left"/>
                    <img src="img/interrogation.jpg" height="70px" class="thumbitem mini1" data="img/vid/uyufytichbi.mp4"/>
                    <img src="img/interrogation.jpg" height="70px" class="thumbitem mini2" data="img/vid/ajdoinvson.mp4"/>
                    <img src="img/interrogation.jpg" height="70px" class="thumbitem mini3" data="img/vid/fdskfkssgv.mp4"/>
                    <img src="img/interrogation.jpg" height="70px" class="thumbitem mini4" data="img/vid/lsfnsgnfrg.mp4"/>
                    <img src="img/interrogation.jpg" height="70px" class="thumbitem mini5" data="img/vid/sgnskngv.mp4" style="display:none"/>
                    <img src="img/slider-right.png" height="70px" width="15px" class="slider-right"/>
                </div>
            </div>

        </div>
    </div>

@endsection
