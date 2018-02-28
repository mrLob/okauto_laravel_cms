@extends('layouts.landing',['mposts' => $mposts])

@section('posts')
    <div id="posts_carousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#posts_carousel" data-slide-to="0" class="active"></li>
            <li data-target="#posts_carousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active justify-content-center">
                <div class="card card-blog">
                    <div class="card-image">
                        <a href="#pablo">
                            <img class="img img-raised rounded" src="{{$mposts[0]->image}}">
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            {{$mposts[0]->title}}
                        </h5>
                        <p class="card-description">
                            {{$mposts[0]->body}}
                        </p>
                        <div class="card-footer">
                            <div class="author">

                            </div>
                            <div class="stats stats-right">
                                <i class="now-ui-icons tech_watch-time"></i>Новое
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @for($i = 1; $i <5; $i++)
            <div class="carousel-item justify-content-center">
                <div class="card card-blog">
                    <div class="card-image">
                        <a href="#pablo">
                            <img class="img img-raised rounded" src="{{$mposts[$i]->image}}">
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            {{$mposts[$i]->title}}
                        </h5>
                        <p class="card-description">
                            {{$mposts[$i]->body}}
                        </p>
                        <div class="card-footer">
                            <div class="author">

                            </div>
                            <div class="stats stats-right">
                                <i class="now-ui-icons tech_watch-time"></i>Новое
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor

        </div>
        <a class="carousel-control-prev" href="#posts_carousel" role="button" data-slide="prev">
            <i class="now-ui-icons arrows-1_minimal-left"></i>
        </a>
        <a class="carousel-control-next" href="#posts_carousel" role="button" data-slide="next">
            <i class="now-ui-icons arrows-1_minimal-right"></i>
        </a>
    </div>
@endsection