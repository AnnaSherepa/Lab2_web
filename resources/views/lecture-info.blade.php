@extends('layout.app')

@section('title')
    {{$type}}
@endsection

@section('name')
    {{$type}}
@endsection

@section('content')
    <div class="schedule_list">
        Кафедра: {{$data['name']}}<br>
        Предмет: {{$sub['name']}}<br>
        Групи:
        @foreach($groups as $item)
            <ul>
                <li>{{$item->name}}</li>
            </ul>
        @endforeach
    </div>
@endsection
