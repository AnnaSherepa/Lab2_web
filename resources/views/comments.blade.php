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
@include('inc.messages', $data)

@endsection
