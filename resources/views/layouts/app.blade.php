<?php
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/** @var User $user */
$user = Auth::user();

?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Minetest Server') - L.O.R.D.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.7.2/css/all.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/icon.png">
    <meta name="theme-color" content="#588f3d">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"
            integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
<div id="top"></div>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                    aria-controls="navbar">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img alt="L.O.R.D." src="/img/icon.png">
            </a>
            <a class="navbar-brand" href="/">
                L.O.R.D.
            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/rules">Правила</a></li>
                <li><a href="/clans" class="text-danger">Кланы</a></li>
                <li><a href="/map">Карта</a></li>
                <li><a href="/videos">Видео</a></li>
                <li><a href="https://vk.com/minetest_lord" target="_blank">
                        <i class="fab fa-vk"></i>
                    </a></li>
                <li><a href="https://www.discord.gg/uTX3mbb" target="_blank">
                        <i class="fab fa-discord"></i>
                    </a></li>
                <li><a href="https://www.youtube.com/channel/UCVULgQLzFwXdwG02zoJOfIg" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right user-menu">
                @auth
                    <li class="logged-in">
                        <a href="#">
                            <img src="<?= $user->discord_avatar ?>" class="img-circle" style="width: 32px; height: 32px;" alt="ava">
                            <?= $user->name ?>
                        </a>
                    </li>
                @else
                    <li><a href="/auth/redirect">Войти</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>


<main class="container-fluid">
    @section('jumbotron')
        <div class="jumbotron reduced">
            <div class="center">
                <h1>@yield('title')</h1>
            </div>
        </div>
    @show
    <div class="content">
        @yield('content')
    </div>
</main>


<footer class="page-footer font-small indigo">
    <div class="container text-md-left">
        <div class="row">

            <div class="col-xs-0 col-sm-3 mx-auto"></div>

            <div class="col-xs-4 col-sm-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">L.O.R.D.</h5>
                <ul class="list-unstyled">
                    <li><a href="/rules">Правила</a></li>
                    <li><a href="https://lord-server.ru/map" target="_blank">Карта</a></li>
                    <li><a href="https://www.minetest.net/downloads/" target="_blank">Скачать</a></li>
                </ul>
            </div>

            <div class="col-xs-4 col-sm-3 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Сообщество</h5>
                <ul class="list-unstyled">
                    <li><a href="https://vk.com/minetest_lord" target="_blank">ВКонтакте</a></li>
                    <li><a href="https://www.discord.gg/uTX3mbb" target="_blank">Discord</a></li>
                    <li><a href="https://wiki.minetest.net/Crafting/ru" target="_blank">Основы крафта</a></li>
                </ul>
            </div>

            <div class="col-xs-4 col-sm-3 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Разработка</h5>
                <ul class="list-unstyled">
                    <li><a href="https://github.com/lord-server/lord" target="_blank">Github</a></li>
                    <li><a href="https://github.com/lord-server/lord/issues" target="_blank">Issues</a></li>
                </ul>
            </div>

            <div class="col-xs-0 col-sm-1 mx-auto"></div>

        </div>
    </div>
    <div class="footer-copyright text-center py-3">
        © {{ \Carbon\Carbon::now()->year }} Команда сервера LORD.
        <a href="https://github.com/lord-server/lord-server.ru" target="_blank">Исходники</a>
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</body>
</html>
