@extends('layouts.app')




@section('content')
<div class="card-body table-full-width table-responsive">
    <div class="col-md-6" align="right">
        <a style="margin-top: 10px" class="btn btn-default btn-s" href="{{ route('service.create') }}">Добавить новый</a>
    </div>
    <table class="table table-hover table-striped">
        <thead>
            <th>#</th>
            <th>Заголовок</th>
            <th>Содержание</th>
            <th>Иконка</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @foreach($servs as $serv)
            <tr>
                <td>{{$serv->id}}</td>
                <td>{{$serv->title}}</td>
                <td>{{$serv->body}}</td>
                <td>{{$serv->icon}}</td>
                <td>
                    <i class="now-ui-icons {{$serv->icon}}"></i>
                </td>
                <td style="text-align: right">
                    <a class="btn btn-info" href="{{route('service.edit', $serv->id)}}" style="margin-top: 5px; margin-bottom: 5px"><i class="nc-icon nc-settings-90"></i></a>
                    <a class="btn btn-danger btn-s" href="{{ route('service.delete',  $serv->id) }}"><i class="nc-icon nc-simple-remove"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection