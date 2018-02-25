@extends('layouts.app')


@section('content')
    <div class="card-body table-full-width table-responsive">
        <div class="col-md-6" align="right">
            <a style="margin-top: 10px" class="btn btn-danger btn-xs" href="{{ route('micropost.index') }}">Отмена</a>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Заголовок</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection