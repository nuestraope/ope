@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Nuestra Ope')])

@section('content')
    <div class="container" style="height: auto;position:relative;">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 videocontainer">
                <div class="video-main">
                    <iframe width="730px" height="410px" src="https://www.youtube.com/embed/DIyzEiFMeHk?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class = "col-lg-12 col-md-12 thumbcontainer">
                    <img src="img/slider-left.png" height="80px" width="15px" class="slider-left"/>
                    <img src="img/video1.png" height="80px" class="thumbitem mini1" data="https://www.youtube.com/embed/DIyzEiFMeHk?controls=0"/>
                    <img src="img/video2.png" height="80px" class="thumbitem mini2" data="https://www.youtube.com/embed/aojC8N2oB2I?controls=0"/>
                    <img src="img/video3.png" height="80px" class="thumbitem mini3" data="https://www.youtube.com/embed/bQBuNfuZo9Q?controls=0"/>
                    <img src="img/video4.png" height="80px" class="thumbitem mini4" data="https://www.youtube.com/embed/jqd6UnxqwEA?controls=0"/>
                    <img src="img/video5.png" height="80px" class="thumbitem mini5" data="https://www.youtube.com/embed/lHFr-5NrHNo?controls=0" style="display:none"/>
                    <img src="img/slider-right.png" height="80px" width="15px" class="slider-right"/>
                </div>
            </div>

        </div>
    </div>

@endsection
