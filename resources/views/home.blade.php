@extends('layouts.app')

@section('jumbotron')
    <div class="jumbotron">
        <div class="center">
            <h1>L.O.R.D.</h1>
            <p>
                <?= __('messages.jumbo.phrase.home') ?>
            </p>
            <p>
                <a class="btn btn-info btn-lg" href="https://t.me/lord_server_ru">
                    <i class="fab fa-telegram"></i> Telegram
                </a>
            </p>
            <p>
                <a class="btn btn-success btn-lg" href="/about"><?= __('messages.About Server') ?></a>
                <a class="btn btn-success btn-lg" href="/play"><?= __('messages.Play') ?></a>
            </p>
        </div>
    </div>
@endsection

@section('content')
    <h2 class="center"><?= __('messages.News') ?></h2>

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


    <h2 class="center"><?= __('messages.Gallery') ?></h2>

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


    <h2 class="center"><?= __('messages.In Game') ?></h2>
    <!--noindex-->
    <widgetbot
            server="268093825975713793"
            channel="284593326370324481"
            width="100%"
            height="600"
    ></widgetbot>
    <script src="https://cdn.jsdelivr.net/npm/@widgetbot/html-embed"></script>
    <!--/noindex-->


    <h2 class="center"><?= __('messages.PvP-Tournament') ?></h2>

    <iframe src="https://challonge.com/lord_pvp_2021_i/module"
            width="100%" height="500"
            frameborder="0" scrolling="auto" allowtransparency="true">
    </iframe>
@endsection
