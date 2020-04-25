@extends('layout.app')

@section('title')
    Comment
@endsection

@section('name')
    Update your comment
@endsection

@section('content')
    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('comment-update-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введіть ваше ім'я</label><br>
            <input type="text" name="name" value="{{$data->name}}" placeholder="Ім'я" id="name" class="form-control"><br>

            <label for="email">Введіть ваш email</label><br>
            <input type="text" name="email" value="{{$data->email}}" placeholder="Email" id="email" class="form-control"><br>

            <label for="subject">Введіть тему вашого повідомлення</label><br>
            <input type="text" name="subject" value="{{$data->subject}}" placeholder="Тема" id="subject" class="form-control"><br>

            <label for="message">Введіть ваше повідомлення</label><br>
            <textarea name="message" placeholder="Повідомлення" cols="40" rows="5" id="message">{{$data->message}}</textarea>
            <br>

            <button type="submit">Оновити</button>

        </div>
    </form>
@endsection
