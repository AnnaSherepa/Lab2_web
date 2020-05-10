@extends('layout.app')

<!--
Головна сторрінка
-->

@section('title')
    Schedule
@endsection

@section('name')
    Розклад
@endsection

@section('content')
    <div class="schedule_list">
        <ul>
            <li><a href="{{ route('CafedraList') }}">Список кафедр</a></li>
            <li><a href="{{ route('LectureList') }}">Список викладачів</a></li>
            <li><a href="{{ route('SubjectList') }}">Список предметів</a></li>
            <li><a href="{{ route('GroupList') }}">Список груп</a></li>
            <li>
                <form action="{{ route('CafedraLectureList') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Введіть назву кафедри, щоб побачити перелік викладачів</label><br>
                        <input type="text" name="name" placeholder="Назва" id="name" class="form-control"><br>
                        <button type="submit">Відправити</button>
                    </div>
                </form>
            </li>
            <li>
                <form action="{{ route('LectureInfo') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Введіть ПІБ викладача</label><br>
                        <input type="text" name="name" placeholder="ПІБ" id="name" class="form-control"><br>
                        <button type="submit">Відправити</button>
                    </div>
                </form>
            </li>
            <li>
                <form action="{{ route('SubjectInfo') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Введіть назву предмета, щоб отримати більше інформації</label><br>
                        <input type="text" name="name" placeholder="Предмет" id="name" class="form-control"><br>
                        <button type="submit">Відправити</button>
                    </div>
                </form>
            </li>
            <li>
                <form action="{{ route('GroupInfo') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Введіть назву групи, щоб отримати більше інформації</label><br>
                        <input type="text" name="name" placeholder="Групи" id="name" class="form-control"><br>
                        <button type="submit">Відправити</button>
                    </div>
                </form>
            </li>
            <!--
            <a href="{{ route('CafedraLectureList') }}">Список викладачів на кафедрі</a>
            <li><a href="#">Список груп</a></li>
             <li><a href="#">Список предметів</a></li>
             <li><a href="#">Список викладачів</a></li>
 -->
        </ul>
    </div>
@endsection
