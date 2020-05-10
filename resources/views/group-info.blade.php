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
                  <td>{{$item->name}}</td><td>{{$item->cafedra->name}}</td><td>{{$item->subject->name}}</td>
                </tr>
            @endforeach
        </table>

        <!--Викладачі:
        @foreach($lectures as $item)
            <ul>
                <li>{{$item->name}}</li>
            </ul>
        @endforeach-->
    </div>
@endsection
