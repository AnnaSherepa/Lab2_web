<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
<div class="wrapper">
    <div id="menuVertical">
        <div class="F">
            <div class="menu">
                <img src="resources/views/img/menu.png" alt=""><br><span>Menu</span>
            </div>
            <ul>
                <li><a href="{{ route('home') }}"><div class="img_n"><img src="resources/views/img/profile.png" alt=""><br><span>Профіль</span></div></a></li>
                <li><a href="{{route('comments')}}"><br><span>Коментарі</span></a></li>
                <li><a href="{{route('schedule')}}"><br><span>Розклад</span></a></li>
            </ul>
        </div>

    </div>

    <div id="temporary_img">
        <span class="txt">
                        Привіт!<br>
                        Я — Аня!<br>
                        І я — програміст!<br>
        </span>
        <a href="{{route('comment')}}">
            <div class="button">
                Залишити коментар
            </div>
        </a>
    </div>

    <div id="information">
        <div class="text">
            <div class="header_text">
                @yield('name')
            </div>

            @yield('content')
        </div>
    </div>

</div>


</body>
</html>
