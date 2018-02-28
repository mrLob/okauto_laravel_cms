@extends('layouts.app')


@section('content')
    <div class="card-body table-full-width table-responsive">
        <div class="col-md-6" align="right">
            <a style="margin-top: 10px" class="btn btn-danger btn-xs" href="{{ route('micropost.index') }}">Отмена</a>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-body">
                <?php
                $action = route('micropost.store');
                if (isset($posts)) {
                    $action = route('micropost.update');
                }
                ?>
                <form class="form-horizontal" method="POST" action="{{ $action }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title" class="col-md-4 control-label">Заголовок</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                            @if ($errors->has('title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif
                        </div>

                    </div>
                    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                        <label for="body" class="col-md-4 control-label">Содержание</label>

                        <div class="col-md-6">
                            <input id="body" type="text" class="form-control" name="body" value="{{ old('body') }}" required>

                            @if ($errors->has('body'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                        <div class="col-md-6">
                            <label>Изображение</label><br>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail img-raised">
                                    @if(isset($posts))<img src="{{$posts->img_}}" alt="...">@endif
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                <div>
                                    <span class="btn btn-raised btn-round btn-default btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="img_" value="@if(isset($posts)){{$posts->img_}}@endif">
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="now-ui-icons ui-1_simple-remove"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(isset($post))
                        <input type="hidden" name="_id" value="{{$post->id}}">
                        <button class="btn btn-success" type="submit">Изменить</button>
                    @else
                        <button class="btn btn-success" type="submit">Добавить</button>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection