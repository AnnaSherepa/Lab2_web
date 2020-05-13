@extends('layout.app')

@section('title')
    {{$type}}
@endsection

@section('name')
    {{$type}}
@endsection

@section('content')
    <div class="schedule_list">
        <table>
            <tr>
                <td>Викладач</td><td>Кафедра</td><td>Предмет</td>
            </tr>
            @foreach($lectures as $item)
                <tr></tr>
                <td><a href="{{ route('LectureInfoID', $item->id) }}">{{$item->name}}</a></td>
                <td><a href="{{ route('CafedraInfoID', $item->cafedra->id) }}">{{$item->cafedra->name}}</a></td>
                <td><a href="{{ route('SubjectInfoID', $item->subject->id) }}">{{$item->subject->name}}</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
