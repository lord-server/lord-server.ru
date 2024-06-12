@extends('layouts.app')

@section('jumbotron')
    <div class="jumbotron">
        <div class="center">
            <h1>L.O.R.D.</h1>
            <p>
                Российский сервер Minetest по мотивам легендариума Дж. Толкина ("Властелин Колец", "Хоббит",..), где игроки —
                кто поодиночке, кто в дружине, кто в клане — пишут историю нашего сервера:
                трудятся, отдыхают, торгуют, сражаются...<br>
                Словом, поодиночке или с друзьями проявляют свою доблесть!
            </p>
            <p>
                <a class="btn btn-success btn-lg" href="/about"><?= __('messages.About Server') ?></a>
                <a class="btn btn-success btn-lg" href="/play"><?= __('messages.Play') ?></a>
            </p>
        </div>
    </div>
@endsection

@section('content')
    <h2 class="center">Новости</h2>

    <script src="https://vk.com/js/api/openapi.js?169" type="text/javascript"></script>
    <script type="text/javascript">VK.init({apiId: 51772316, onlyWidgets: true});</script>
    <div class="row">
        <div class="col-xs-12">
            <div id="vk_groups"></div>
        </div>
    </div>
    <script type="text/javascript">
        VK.Widgets.Group("vk_groups", {mode: 4, no_cover: 1, width: "auto", height: "700", color3: "479747"}, 110633545);
    </script>


    <h2 class="center">Галерея</h2>

    <div class="row">
        <div class="col-lg-6">
            <a href="/img/gallery/minetest-ru-lord-0.jpg" class="thumbnail">
                <img src="/img/gallery/minetest-ru-lord-0.jpg" alt="Первые постройки на L.O.R.D.">
            </a>
        </div>

        <div class="col-lg-6">
            <a href="/img/gallery/minetest-ru-lord-1.jpg" class="thumbnail">
                <img src="/img/gallery/minetest-ru-lord-1.jpg" alt="Подземный город гномов, ласково называемый &quot;Гаражи&quot;">
            </a>
        </div>

        <div class="col-lg-6">
            <a href="/img/gallery/minetest-ru-lord-2.jpg" class="thumbnail">
                <img src="/img/gallery/minetest-ru-lord-2.jpg" alt="Красивый мост через реку в утренней дымке">
            </a>
        </div>

        <div class="col-lg-6">
            <a href="/img/gallery/minetest-ru-lord-3.jpg" class="thumbnail">
                <img src="/img/gallery/minetest-ru-lord-3.jpg" alt="Башня тёмных эльфов">
            </a>
        </div>
    </div>


    <h2 class="center">В игре</h2>

    <widgetbot
            server="268093825975713793"
            channel="284593326370324481"
            width="100%"
            height="600"
    ></widgetbot>
    <script src="https://cdn.jsdelivr.net/npm/@widgetbot/html-embed"></script>


    <h2 class="center">PvP-Турнир</h2>

    <iframe src="https://challonge.com/lord_pvp_2021_i/module"
            width="100%" height="500"
            frameborder="0" scrolling="auto" allowtransparency="true">
    </iframe>
@endsection
