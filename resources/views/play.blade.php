@extends('layouts.app')
@section('title', 'Как поиграть')


@section('content')
    <h2>Скачайте Minetest</h2>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-3">
            <div class="panel panel-success download-panel">
                <div class="panel-body">
                    <strong>Windows</strong>
                    <a href="https://github.com/minetest/minetest/releases/download/5.8.0/minetest-5.8.0-win64.zip">
                        Minetest 5.8.0 - portable
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3">
            <div class="panel panel-success download-panel">
                <div class="panel-body">
                    <strong>Android</strong>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=net.minetest.minetest&utm_source=website&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1">
                        <i class="fab fa-google-play"></i> Google Play
                    </a>
                    <span class="visible-lg-inline">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                    <nobr>
                        <a target="_blank" href="https://f-droid.org/packages/net.minetest.minetest">
                            F-Droid
                        </a>
                    </nobr>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3">
            <div class="panel panel-success download-panel">
                <div class="panel-body">
                    <strong>Linux</strong>
                    <a target="_blank" href="https://flathub.org/apps/details/net.minetest.Minetest">
                        Flatpak (all distributions)
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3">
            <div class="panel panel-success download-panel">
                <div class="panel-body">
                    <strong><?= __('messages.Others') ?></strong>
                    <a target="_blank" href="https://www.minetest.net/downloads/">
                        <img alt="MT" class="fa" src="https://www.minetest.net/media/icon.svg" width="20" height="20"/> Minetest Download
                    </a>
                </div>
            </div>
        </div>
    </div>


    <h2>Запустите и найдите сервер L.O.R.D.</h2>
    <ul>
        <li>
            Откройте вкладку <strong class="colored">"Подключиться к игре"</strong>
        </li><li>
            Наберите в поиске <strong class="colored">"lord"</strong> или <strong class="colored">"lotr"</strong>,
            нажмите <i class="fa fa-search"></i>
        </li>
    </ul>
    <p>
        <img class="img-responsive" src="img/play/find-server-lord.png" alt="find and connect to Minetest server LORD">
    </p>

    <h2 class="center">
        <a class="btn btn-success btn-lg" href="/about"><?= __('messages.About Server') ?></a>
    </h2>

@endsection
