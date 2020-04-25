@extends('layout.app')

@section('title')
    {{ $data->subject }}
@endsection

@section('name')
    {{ $data->subject }}
@endsection

@section('content')
        <div class="info">
            <div class="info_who">{{ $data->name }}, {{ $data->email }}</div>
            <div class="data"> {{$data->created_at}}</div>
            <div class="info_message">{{$data->message}}</div>
            <a href="{{ route('comment-update', $data->id) }}"><button class="More">Редагувати</button></a>
            <a href="{{ route('comment-delete', $data->id) }}"><button class="More">Видалити</button></a>
        </div>
@endsection
