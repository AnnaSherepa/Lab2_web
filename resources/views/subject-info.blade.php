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
    <div class="schedule_list">
        Кафедра: {{$caf['name']}}<br>
        Викладач: {{$data['name']}}<br>
        Групи:
        @foreach($data->groups as $item)
            <ul>
                <li>{{$item->name}}</li>
            </ul>
        @endforeach
    </div>
@endsection
