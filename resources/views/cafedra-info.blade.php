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
        Викладачі:
        @foreach($lectures as $item)
            <ul>
                <li>{{$item->name}}</li>
            </ul>
        @endforeach
        Предмети:
        @foreach($subjects as $item)
            <ul>
                <li>{{$item->name}}</li>
            </ul>
        @endforeach
        Групи на кафедрі:
        @foreach($groups as $item)
            <ul>
                <li>{{$item}}</li>
            </ul>
        @endforeach
    </div>
@endsection

