@extends('layouts.app')




@section('content')
<div class="card-body table-full-width table-responsive">
    <table class="table table-hover table-striped">
        <thead>
            <th>Почта</th>
            <th>Имя</th>
            <th>Сообщение</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($msg as $message)
            <tr>
                <td>{{$message->email}}</td>
                <td>{{$message->title}}</td>
                <td>{{$message->body}}</td>
                <td style="text-align: right">
                    {{--<a class="btn btn-info" href="{{route('messages.edit', $message->id)}}" style="margin-top: 5px; margin-bottom: 5px">Изменить</a>--}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection