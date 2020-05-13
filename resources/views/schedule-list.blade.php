@extends('layout.app')

<!--
    Сторінка, яка відображає усі коментарі
-->
@section('title')
    {{$type}}
@endsection

@section('name')
    {{$type}}
@endsection

@section('content')
    @include('inc.list_schedule', ['data' =>$data, 'type' =>$type])

@endsection
