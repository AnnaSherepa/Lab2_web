@extends('layout.app')

<!--
Головна сторрінка
-->

@section('title')
    Home
@endsection

@section('name')
    Профіль
@endsection

@section('content')
        <div class="inf_text">
            <div class="inf_text_container">
                <div class="inf_text_block">Прізвище,  ім'я</div>
                <div class="inf_text_block">Дата народження</div>
                <div class="inf_text_block">Місто</div>
                <div class="inf_text_block">Контактний телефон</div>
                <div class="inf_text_block">Освіта</div>
            </div>
            <div class="inf_text_container">
                <div class="inf_text_block">Шерепа Анна</div>
                <div class="inf_text_block">25.06.2001</div>
                <div class="inf_text_block">м. Київ</div>
                <div class="inf_text_block">+380-00-000-00</div>
                <div class="inf_text_block">повна середня</div>
            </div>
        </div>
@endsection
