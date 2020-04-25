@extends('layout.app')

@section('title')
    Comment
@endsection

@section('name')
    Your comment
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
    <form action="{{ route('comment-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введіть ваше ім'я</label><br>
            <input type="text" name="name" placeholder="Ім'я" id="name" class="form-control"><br>

            <label for="email">Введіть ваш email</label><br>
            <input type="text" name="email" placeholder="Email" id="email" class="form-control"><br>

            <label for="subject">Введіть тему вашого повідомлення</label><br>
            <input type="text" name="subject" placeholder="Тема" id="subject" class="form-control"><br>

            <label for="message">Введіть ваше повідомлення</label><br>
            <textarea name="message" placeholder="Повідомлення" cols="40" rows="5" id="message"></textarea>
            <br>

            <button type="submit">Відправити</button>

        </div>
    </form>
@endsection
