@extends('layouts.app')




@section('content')
<div class="card-body table-full-width table-responsive">
    <div class="col-md-6" align="right">
        <a style="margin-top: 10px" class="btn btn-default btn-xs" href="{{ route('micropost.create') }}">Добавить новый</a>
    </div>
    <table class="table table-hover table-striped">
        <thead>
            <th>Заголовок</th>
            <th>Содержание</th>
            <th>Изображение</th>
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
                    {{--<form method="post" enctype="multipart/form-data" action="{{ route('micropost.update', $category->id)}}"id="theFormUp{{$category->id}}" style="display:inline">--}}
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