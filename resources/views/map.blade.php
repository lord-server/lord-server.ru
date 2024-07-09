@extends('layouts.app')
@section('title', __('messages.Map of our world'))

@section('jumbotron')
    <div class="jumbotron map">
        <div class="center">
            <h1>@yield('title')</h1>
            <p>
                <?= __('messages.jumbo.phrase.map') ?>
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
                <h3><?= __('messages.map-page.new.New Version') ?></h3>
                <p>
                    <?= __('messages.map-page.new.description1') ?>
                </p><p>
                    <?= __('messages.map-page.new.description2') ?>
                </p>
            </div>
        </div>
    </a>

    <a href="http://oldmap.lord-server.ru/map-lord/map.html" target="_blank" class="thumbnail">
        <div class="row">
            <img src="/img/map/old.png" alt="old map" class="col-xs-12 col-sm-3">
            <div class="caption col-xs-12 col-sm-9">
                <h3><?= __('messages.map-page.old.Old Version') ?></h3>
                <p>
                    <?= __('messages.map-page.old.description') ?>
                </p>
            </div>
        </div>
    </a>
</div>
@endsection
