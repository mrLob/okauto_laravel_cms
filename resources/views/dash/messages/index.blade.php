@extends('layouts.app')




@section('content')
<div class="card-body table-full-width table-responsive">
    <table class="table table-hover table-striped">
        <thead>
            <th>#</th>
            <th>Почта</th>
            <th>Имя</th>
            <th>Сообщение</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($msg as $message)
            <tr>
                <td>{{$message->id}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->title}}</td>
                <td>{{$message->body}}</td>
                <td style="text-align: right">
                    <a class="btn btn-danger btn-s" href="{{ route('messages.delete',  $message->id) }}"><i class="nc-icon nc-simple-remove"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection