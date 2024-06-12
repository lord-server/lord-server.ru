@extends('layouts.app')
@section('title', 'Карта нашего мира')

@section('jumbotron')
    <div class="jumbotron">
        <div class="center">
            <h1>@yield('title')</h1>
            <p>
                Опасное это дело, Фродо, — выходить за порог. Стоит ступить на дорогу и, если дашь волю ногам, неизвестно куда тебя занесёт.
                <!-- Мир, который нас окружает, огромен. Ты можешь оградить себя стеной и запереться от этого мира, но самого мира тебе не запереть. -->
                <!-- — Это верно, — сказал Сэм. — Знали бы, куда идем, нипочем бы здесь не оказались. -->
            </p>
        </div>
    </div>
@endsection


@section('content')
<h2></h2>

<div class="row">
    <a href="https://map.lord-server.ru/" target="_blank" class="thumbnail">
        <div class="row">
            <img src="/img/map/new.png" alt="new map" class="col-xs-12 col-sm-3">
            <div class="caption col-xs-12 col-sm-9">
                <h3>Новый вариант</h3>
                <p>
                    На данный момент находится в активной разработке.
                </p><p>
                    Карта пока только небольшой части мира.
                    Однако она с новыми постройками и 3D!
                </p>
            </div>
        </div>
    </a>

    <a href="http://oldmap.lord-server.ru/map-lord/map.html" target="_blank" class="thumbnail">
        <div class="row">
            <img src="/img/map/old.png" alt="old map" class="col-xs-12 col-sm-3">
            <div class="caption col-xs-12 col-sm-9">
                <h3>Старый вариант</h3>
                <p>
                    Эта карта очень давно не обновлялась и на ней запечатлён мир 5ти - 7ми летней давности.
                    Однако её размер полон и можно посмотреть, где какие биомы/реки/моря.
                </p>
            </div>
        </div>
    </a>
</div>
@endsection
