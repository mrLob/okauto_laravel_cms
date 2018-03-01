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
        <th>Заголовок</th>
        <th>Содержание</th>
        <th>Изображение</th>
        <th></th>
        <th></th>
        </thead>
        <tbody>
        @foreach($mposts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->image}}</td>
                <td>
                    <img width="100" src="/{{$post->image}}">
                </td>
                <td style="text-align: right">
                    <a class="btn btn-info" href="{{route('micropost.edit', $post->id)}}" style="margin-top: 5px; margin-bottom: 5px">Изменить</a>
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
        <th>Почта</th>
        <th>Имя</th>
        <th>Сообщение</th>
        </thead>
        <tbody>
        @foreach($msg as $message)
            <tr>
                <td>{{$message->email}}</td>
                <td>{{$message->title}}</td>
                <td>{{$message->body}}</td>
                <td>
                    {{--<form method="post" enctype="multipart/form-data" action="{{ route('category.update', $category->id)}}"id="theFormUp{{$category->id}}" style="display:inline">--}}
                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}" />--}}
                    {{--<a class="btn btn-info" type="submit" onclick="updateCategory({{$category->id}},'{{$category->name}}')">Изменить</a>--}}
                    {{--</form>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
