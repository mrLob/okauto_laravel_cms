@extends('layouts.landing',['mposts' => $mposts])

@section('posts')
    <div id="posts_carousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#posts_carousel" data-slide-to="0" class="active"></li>
            <li data-target="#posts_carousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active justify-content-center" data-toggle="modal" data-target="#myModal">
                <div class="card card-blog" >
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
                @if(!isset($mposts[$i])) @break @endif
                    <div class="carousel-item justify-content-center" data-toggle="modal" data-target="#myModal{{$i}}">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img img-raised rounded" src="{{$mposts[$i]->image}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    {{$mposts[$i]->title}}
                                </h4>
                                <p class="card-description" style="white-space: nowrap;overflow: hidden;">
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
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">{{$mposts[0]->title}}</h4>
                        </div>
                        <div class="modal-body">
                            {{$mposts[0]->body}}
                        </div>
                        <div class="modal-footer" style="text-align: center">
                            <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
            @for($i = 1; $i <5; $i++)
                @if(!isset($mposts[$i])) @break @endif
                    <div class="modal fade" id="myModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">{{$mposts[$i]->title}}</h4>
                                </div>
                                <div class="modal-body">
                                    {{$mposts[$i]->body}}
                                </div>
                                <div class="modal-footer" style="text-align: center">
                                    <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Закрыть</button>
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