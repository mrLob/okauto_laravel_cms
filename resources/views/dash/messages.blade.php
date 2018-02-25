@extends('layouts.app')




@section('content')
<div class="card-body table-full-width table-responsive">
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