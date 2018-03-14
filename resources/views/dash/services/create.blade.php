@extends('layouts.app')


@section('content')
    <div class="card-body table-full-width table-responsive">
        <div class="col-md-6" align="right">
            <a style="margin-top: 10px" class="btn btn-danger btn-xs" href="{{ route('service.index') }}">Отмена</a>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel-body">
                <?php
                    $action = route('service.store');
                if (isset($serv)) {
                    $action = route('service.update');
                }
                ?>
                <form class="form-horizontal" method="POST" action="{{ $action }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title" class="col-md-4 control-label">Заголовок</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control" name="title" value="@if (isset($serv)){{ $serv->title}}@endif" required autofocus>

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
                            <input id="body" type="text" class="form-control" name="body" value="@if (isset($serv)){{ $serv->body}}@endif" required>

                            @if ($errors->has('body'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
                        <div class="col-md-6">
                            <label>Иконка</label><br>
                            <div>
                                <input id="icon" type="text" class="form-control icon-class-input" name="icon" value="@if (isset($serv)){{ $serv->icon}}@endif" required>
                                <label class="settinglabel"></label>
                                <input type="hidden" class="icon-class-input" value="fa @if (isset($serv)){{ $serv->icon}}@endif" />
                                <button type="button" class="btn btn-primary picker-button"><span class="fa fa-folder-open"></span></button>
                                <span class="demo-icon"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">

                        </div>
                    </div>
                    @if(isset($serv))
                        <input type="hidden" name="_id" value="{{$serv->id}}">
                        <button class="btn btn-success" type="submit">Изменить</button>
                    @else
                        <button class="btn btn-success" type="submit">Добавить</button>
                    @endif
                </form>
            </div>
            <button class="btn btn-default" role="iconpicker"></button>
        </div>
        <br>
    </div>
    <button type="button" class="btn btn-primary picker-button">Pick an Icon</button>
	<span class="demo-icon"></span>
</div>

<div id="iconPicker" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Icon Picker</h4>
			</div>
			<div class="modal-body">
				<div>
					<ul class="icon-picker-list">
						<li>
							<a data-class="{item} {activeState}" data-index="{index}">
                                <span class="{item}"></span>
                                <p>{item}</p>
                            </a>
						</li>
					</ul>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" id="change-icon" class="btn btn-success">
					<span class="fa fa-check-circle-o"></span>
					Выбрать
				</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
			</div>
		</div>
	</div>
</div>
@endsection