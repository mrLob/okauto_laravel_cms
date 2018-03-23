@extends('layouts.landing',['mposts' => $mposts,'servs' => $servs])

@section('posts')
    <div id="posts_carousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#posts_carousel" data-slide-to="0" class="active"></li>
            @for($i = 1; $i <5; $i++)
                @if(!isset($mposts[$i])) @break @endif
            <li data-target="#posts_carousel" data-slide-to="{{$i}}"></li>
            @endfor
        </ol>
        <div class="carousel-inner" role="listbox">
            @if(isset($mposts[0]))
            <div class="carousel-item active justify-content-center" data-toggle="modal" data-target="#myModal">
                <div class="card card-blog" >
                    <div class="card-image">
                        <a>
                            <img class="img img-raised rounded" src="{{$mposts[0]->image}}">
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            {{$mposts[0]->title}}
                        </h5>
                        <p class="card-description" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                            {{$mposts[0]->body}}
                        </p>
                        <div class="card-footer">
                            <div class="author">

                            </div>
                            <div class="stats stats-right">
                                <i class="now-ui-icons tech_watch-time" style="color: red"></i>{{Carbon\Carbon::parse($mposts[0]->created_at)->format('d m Y')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <h4>Скоро будут :)</h4>
            @endif
            @for($i = 1; $i <5; $i++)
                @if(!isset($mposts[$i])) @break @endif
                    <div class="carousel-item justify-content-center" data-toggle="modal" data-target="#myModal{{$i}}">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a>
                                    <img class="img img-raised rounded" src="{{$mposts[$i]->image}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    {{$mposts[$i]->title}}
                                </h4>
                                <p class="card-description" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                    {{$mposts[$i]->body}}
                                </p>
                                <div class="card-footer">
                                    <div class="author">

                                    </div>
                                    <div class="stats stats-right">
                                        <i class="now-ui-icons tech_watch-time"></i>{{Carbon\Carbon::parse($mposts[$i]->created_at)->format('d m Y')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endfor
            <!--noindex-->
                @if(isset($mposts[0]))
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
                @endif
                @for($i = 1; $i <5; $i++)
                    @if(!isset($mposts[$i])) @break @endif
                        <div class="modal fade" id="servModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
            <!--/noindex-->
        </div>
        <a class="carousel-control-prev" href="#posts_carousel" role="button" data-slide="prev">
            <i class="now-ui-icons arrows-1_minimal-left"></i>
        </a>
        <a class="carousel-control-next" href="#posts_carousel" role="button" data-slide="next">
            <i class="now-ui-icons arrows-1_minimal-right"></i>
        </a>
    </div>
@endsection

@section('services')
    @if(isset($servs[0]))
        @for($i = 0;$i < 4;$i++)
            @if(!isset($servs[$i])) @break @endif
            <div class="col-md-3">
                <div class="card" style="height: 270px;" data-toggle="modal" data-target="#myModal{{$i}}">
                    <div class="info info-hover">
                        <div class="icon icon-primary">
                            <i class="{{$servs[$i]->icon}}"></i>
                        </div>
                        <h5 class="info-title">{{$servs[$i]->title}}</h5>
                        <p class="description" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{$servs[$i]->body}}</p>
                    </div>
                </div>
            </div>
        @endfor
        @for($i = 4; $i < 8;$i++)
        @if(!isset($servs[$i])) @break @endif
            <div class="col-md-7 ml-auto mr-auto text-center">
                <div class="info-horizontal" style="height: 70px;margin: 10px;text-shadow: 0 0 10px rgba(0,0,0,1.2); border-radius: 0.1875rem;color:#212738;">
                    <div class="description" data-toggle="modal" data-target="#myModal{{$i}}">
                        <h3>
                            <div class="icon icon-primary">
                                <i class="{{$servs[$i]->icon}}"></i>
                            </div>
                            {{$servs[$i]->title}}
                        </h3>
                        <div class="servs-dis">
                            <p style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{$servs[$i]->body}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    @endif
@endsection

@section('service-modal')
 <!--noindex-->
 @for($i = 0; $i < 8; $i++)
 @if(!isset($servs[$i])) @break @endif
     <div class="modal fade" id="myModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     <h4 class="modal-title" id="myModalLabel">{{$servs[$i]->title}}</h4>
                 </div>
                 <div class="modal-body">
                     {{$servs[$i]->body}}
                 </div>
                 <div class="modal-footer" style="text-align: center">
                     <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Закрыть</button>
                 </div>
             </div>
         </div>
     </div>
@endfor
<!--/noindex-->
@endsection