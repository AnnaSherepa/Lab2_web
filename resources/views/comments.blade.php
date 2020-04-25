@extends('layout.app')

<!--
    Сторінка, яка відображає усі коментарі
-->
@section('title')
    Comments
@endsection

@section('name')
    Comments
@endsection

@section('content')
@include('inc.messages')
    @foreach($data as $item)
        <div class="info">
            <div class="info_subject">{{$item->subject}}</div>
            <div class="info_who">{{ $item->name }}, {{ $item->email }}</div>
            <div class="data"> {{$item->created_at}}</div>
            <div class="info_message">{{$item->message}}</div>
            <a href="{{ route('comment-data-one', $item->id ) }}"><button class="More">Детальніше</button></a>
        </div>
    @endforeach
@endsection
