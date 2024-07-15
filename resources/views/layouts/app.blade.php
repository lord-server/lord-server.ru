<?php
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;use Illuminate\Support\Facades\Config;

/** @var User $user */
$user = Auth::user();

?><!DOCTYPE html>
<html lang="<?= App::getLocale() ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <?php foreach (Config::get('app.locale_available') as $lang): ?>
    <link rel="alternate" hreflang="<?= $lang ?>" href="/choose-locale/<?= $lang ?>" />
    <?php endforeach; ?>
    <link rel="alternate" hreflang="x-default" href="/choose-locale/ru" />
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
                <li><a href="/rules"><?= __('messages.Rules') ?></a></li>
                <li><a href="/players"><?= __('messages.Players') ?></a></li>
                <li><a href="/spawns"><?= __('messages.Spawns') ?></a></li>
                <li><a href="/clans"><?= __('messages.Clans') ?></a></li>
                <li class="hidden-sm"><a href="/map"><?= __('messages.Map') ?></a></li>
                <li class="hidden-sm"><a href="/videos"><?= __('messages.Videos') ?></a></li>
                <li class="hidden-md hidden-sm">
                    <a href="https://vk.com/minetest_lord" target="_blank">
                        <i class="fab fa-vk"></i>
                    </a>
                </li>
                <li class="hidden-sm"><a href="https://www.discord.gg/uTX3mbb" target="_blank">
                        <i class="fab fa-discord"></i>
                    </a>
                </li>
                <li class="hidden-md hidden-sm">
                    <a href="https://www.youtube.com/channel/UCVULgQLzFwXdwG02zoJOfIg" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right user-menu">
                <li>
                    <a href="https://boosty.to/lord-server" class="btn navbar-btn btn-boosty" target="_blank">
                        <img class="boosty" alt="Boosty" src="/img/boosty-logo.svg"/>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" id="choose-lang" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?= App::getLocale() ?> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="choose-lang">
                        <?php foreach (Config::get('app.locale_available') as $lang): ?>
                        <li><a href="/choose-locale/<?= $lang ?>"><?= $lang ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                @auth
                    <li class="logged-in">
                        <a href="#">
                            <img src="<?= $user->discord_avatar ?>" class="img-circle" style="width: 32px; height: 32px;" alt="ava">
                            <?= $user->name ?>
                        </a>
                    </li>
                @else
                    <li><a href="/auth/redirect"><?= __('messages.Login') ?></a></li>
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
        @if (session('success'))
            <div class="alert alert-success">
                <strong><?= __('messages.Well done!') ?></strong> <?= session('success') ?>
            </div>
        @endif
        @if (session('info'))
            <div class="alert alert-info">
                <strong><?= __('messages.Info:') ?></strong> <?= session('info') ?>
            </div>
        @endif
        @if (session('warning'))
            <div class="alert alert-warning">
                <strong><?= __('messages.Warning!') ?></strong> <?= session('warning') ?>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                <strong><?= __('messages.Error!') ?></strong> <?= session('error') ?>
            </div>
        @endif

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
                    <li><a href="/rules"><?= __('messages.Rules') ?></a></li>
                    <li><a href="/map" target="_blank"><?= __('messages.Map') ?></a></li>
                    <li><a href="/about" target="_blank"><?= __('messages.About Server') ?></a></li>
                    <li><a href="/play" target="_blank"><?= __('messages.Play') ?></a></li>
                </ul>
            </div>

            <div class="col-xs-4 col-sm-3 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><?= __('messages.Community') ?></h5>
                <ul class="list-unstyled">
                    <li><a href="https://www.discord.gg/uTX3mbb" target="_blank">Discord</a></li>
                    <li><a href="https://vk.com/minetest_lord" target="_blank"><?= __('messages.VK') ?></a></li>
                    <li><a href="https://www.youtube.com/channel/UCVULgQLzFwXdwG02zoJOfIg" target="_blank">YouTube</a></li>
                </ul>
            </div>

            <div class="col-xs-4 col-sm-3 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><?= __('messages.Development') ?></h5>
                <ul class="list-unstyled">
                    <li><a href="https://github.com/lord-server/lord" target="_blank">GitHub</a></li>
                    <li><a href="https://github.com/lord-server/lord/issues" target="_blank">Issues</a></li>
                </ul>
            </div>

            <div class="col-xs-0 col-sm-1 mx-auto"></div>

        </div>
    </div>
    <div class="footer-copyright text-center py-3">
        © {{ \Carbon\Carbon::now()->year }} <?= __('messages.Lord Server Team') ?>.
        <a href="https://github.com/lord-server/lord-server.ru" target="_blank"><?= __('messages.Sources') ?></a>
    </div>

</footer>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(97567357, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/97567357" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
