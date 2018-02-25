@extends('layouts.landing')

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
                            <img class="img img-raised rounded" src="assets/img/card-blog2.jpg">
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            That’s One Way To Ditch Your Passenger
                        </h5>
                        <p class="card-description">
                            As near as we can tell, this guy must have thought he was going over backwards and tapped the rear...
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
            <div class="carousel-item justify-content-center">
                <div class="card card-blog">
                    <div class="card-image">
                        <a href="#pablo">
                            <img class="img rounded" src="assets/img/examples/card-blog18.jpg">
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="category text-danger">Animals</h6>
                        <h5 class="card-title">
                            Shark Week: How to Watch It Like a Scientist
                        </h5>
                        <p class="card-description">
                            Just when you thought it was safe to turn on your television, the Discovery Channel's "Shark Week"...
                        </p>
                        <div class="card-footer">
                            <div class="author">
                                <img src="assets/img/julie.jpg" alt="..." class="avatar img-raised">
                                <span>Mike John</span>
                            </div>
                            <div class="stats stats-right">
                                <i class="now-ui-icons tech_watch-time"></i> 5 min read
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#posts_carousel" role="button" data-slide="prev">
            <i class="now-ui-icons arrows-1_minimal-left"></i>
        </a>
        <a class="carousel-control-next" href="#posts_carousel" role="button" data-slide="next">
            <i class="now-ui-icons arrows-1_minimal-right"></i>
        </a>
    </div>
@endsection