@extends('layouts.app')




@section('content')
<div class="card-body table-full-width table-responsive">
    <div class="col-md-6" align="right">
        <a style="margin-top: 10px" class="btn btn-default btn-s" href="{{ route('micropost.create') }}">Добавить новый</a>
    </div>
    <table class="table table-hover table-striped">
        <thead>
            <th>#</th>
            <th>Заголовок</th>
            <th>Содержание</th>
            <th>Изображение</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @foreach($mposts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td><img width="150" src="/{{$post->image}}"></td>
                <td>
                </td>
                <td style="text-align: right">
                    <a class="btn btn-info" href="{{route('micropost.edit', $post->id)}}" style="margin-top: 5px; margin-bottom: 5px"><i class="nc-icon nc-settings-90"></i></a>
                    <a class="btn btn-danger btn-s" href="{{ route('micropost.delete',  $post->id) }}"><i class="nc-icon nc-simple-remove"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection