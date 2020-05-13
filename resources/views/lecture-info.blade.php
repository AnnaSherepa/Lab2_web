@extends('layout.app')

@section('title')
    {{$type}}
@endsection

@section('name')
    {{$type}}
@endsection

@section('content')
    <div class="schedule_list">
        Кафедра: <a href="{{ route('CafedraInfoID', $data->id) }}">{{$data['name']}}<br></a>
        Предмет: <a href="{{ route('SubjectInfoID', $sub->id) }}">{{$sub['name']}}<br></a>
        Групи:
        @foreach($groups as $item)
            <ul>
                <li><a href="{{ route('GroupInfoID', $item->id) }}">{{$item->name}}</a></li>
            </ul>
        @endforeach
    </div>
@endsection
