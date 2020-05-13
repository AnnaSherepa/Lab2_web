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
        Кафедра: <a href="{{ route('CafedraInfoID', $caf->id) }}">{{$caf['name']}}<br></a>
        Викладач: <a href="{{ route('LectureInfoID', $data->id) }}">{{$data['name']}}<br></a>
        Групи:
        @foreach($data->groups as $item)
            <ul>
                <li><a href="{{ route('GroupInfoID', $item->id) }}"> {{$item->name}}</a></li>
            </ul>
        @endforeach
    </div>
@endsection
