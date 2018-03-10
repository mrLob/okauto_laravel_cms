@extends('layouts.app')




@section('content')
<div class="card-body table-full-width table-responsive">
    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <table class="table table-hover table-striped">
        <h5>Последние микропосты</h5>
        <thead>
        <th>#</th>
        <th>Заголовок</th>
        <th>Содержание</th>
        <th>Изображение</th>
        <th></th>
        <th></th>
        </thead>
        <tbody>
        @foreach($pmposts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->image}}</td>
                <td>
                    <img width="100" src="/{{$post->image}}">
                </td>
                <td style="text-align: right">
                    <a class="btn btn-info" href="{{route('micropost.edit', $post->id)}}" style="margin-top: 5px; margin-bottom: 5px"><i class="nc-icon nc-settings-90"></i></a>
                    <a class="btn btn-danger btn-s" href="{{ route('micropost.delete',  $post->id) }}"><i class="nc-icon nc-simple-remove"></i></a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <h5>Последние сообщения</h5>
    <table class="table table-hover table-striped">
        <thead>
        <th>#</th>
        <th>Почта</th>
        <th>Имя</th>
        <th>Сообщение</th>
        <th></th>
        </thead>
        <tbody>
        @foreach($pmsg as $message)
            <tr>
                <td>{{$message->id}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->title}}</td>
                <td>{{$message->body}}</td>
                <td style="text-align: right">
                    <a class="btn btn-danger btn-s" href="{{ route('messages.delete',  $message->id) }}">Удалить</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
