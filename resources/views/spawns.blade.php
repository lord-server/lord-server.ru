@extends('layouts.app')
@section('title', 'Спауны')

@section('jumbotron')
    <div class="jumbotron">
        <div class="center">
            <h1>@yield('title')</h1>
            <p>
                Сегодня мой сто одиннадцатый день рождения. Увы, сто одиннадцать лет — это слишком мало, когда живёшь среди таких чудесных и славных хоббитов.
            </p>
        </div>
    </div>
@endsection


@section('content')
    <h2 class="center">Где рождаются игроки</h2>

    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <div class="panel panel-success download-panel">
                <div class="panel-heading">
                    <strong><?= __('messages.spawns.Orcish') ?></strong>
                </div>
                <div class="panel-body">
                    <p>
                        <img class="img-responsive" src="img/spawns/orcish.png" alt="Orcish Spawn">
                    </p>
                    <p>
                        <b><?= __('messages.spawn.Keepers') ?>:</b>
                        <div>
                            <b class="label label-keeper">@Lester_Grazziano</b>
                            <b class="label label-keeper">@SuperKate</b>
                        </div>
                    </p>
                    <p>
                        <b><?= __('messages.spawn.Squad') ?>:</b>
                        <div>
                            <b class="label label-squad">@Semi</b>
                            <b class="label label-squad">@TheWoLFrAm</b>
                            <b class="label label-squad">@Vldslv</b>
                        </div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-lg-6">
            <div class="panel panel-success download-panel">
                <div class="panel-heading">
                    <strong><?= __('messages.spawns.Human') ?></strong>
                </div>
                <div class="panel-body">
                    <p>
                        <img class="img-responsive" src="img/spawns/human.png" alt="Human Spawn">
                    </p>
                    <p>
                        <b><?= __('messages.spawn.Keepers') ?>:</b>
                        <div>
                            <b class="label label-keeper">@VladTs</b>
                            <b class="label label-keeper">@Pilsner</b>
                        </div>
                    </p>
                    <p>
                        <b><?= __('messages.spawn.Squad') ?>:</b>
                        <div>
                            <b class="label label-squad">&lt;вакансия&gt;</b>
                            <b class="label label-squad">&lt;вакансия&gt;</b>
                            <b class="label label-squad">&lt;вакансия&gt;</b>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <div class="panel panel-success download-panel">
                <div class="panel-heading">
                    <strong><?= __('messages.spawns.Hobbit') ?></strong>
                </div>
                <div class="panel-body">
                    <p>
                        <i>&lt;активно строится, скоро запуск&gt;</i>
                    </p>
                    <p>
                        <b><?= __('messages.spawn.Keepers') ?>:</b>
                        <div>
                            <b class="label label-keeper">@Shishka</b>
                            <b class="label label-keeper">&lt;вакансия&gt;</b>
                        </div>
                    </p>
                    <p>
                        <b><?= __('messages.spawn.Squad') ?>:</b>
                        <div>
                            <b class="label label-squad">&lt;вакансия&gt;</b>
                            <b class="label label-squad">&lt;вакансия&gt;</b>
                            <b class="label label-squad">&lt;вакансия&gt;</b>
                        </div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-lg-6">
            <div class="panel panel-success download-panel">
                <div class="panel-heading">
                    <strong><?= __('messages.spawns.Elven') ?></strong>
                </div>
                <div class="panel-body">
                    <p>
                        <i class="text-muted">&lt;запланирован&gt;</i>
                    </p>
                    <p>
                        <b><?= __('messages.spawn.Keepers') ?>:</b>
                        <div>
                            <b class="label label-default text-muted">&lt;вакансия-позже&gt;</b>
                            <b class="label label-default text-muted">&lt;вакансия-позже&gt;</b>
                        </div>
                    </p>
                    <p>
                        <b><?= __('messages.spawn.Squad') ?>:</b>
                        <div>
                            <b class="label label-default text-muted">&lt;вакансия-позже&gt;</b>
                            <b class="label label-default text-muted">&lt;вакансия-позже&gt;</b>
                            <b class="label label-default text-muted">&lt;вакансия-позже&gt;</b>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <div class="panel panel-success download-panel">
                <div class="panel-heading">
                    <strong><?= __('messages.spawns.Dwarven') ?></strong>
                </div>
                <div class="panel-body">
                    <p>
                        <i class="text-muted">&lt;запланирован&gt;</i>
                    </p>
                    <p>
                        <b><?= __('messages.spawn.Keepers') ?>:</b>
                        <div>
                            <b class="label label-default text-muted">&lt;вакансия-позже&gt;</b>
                            <b class="label label-default text-muted">&lt;вакансия-позже&gt;</b>
                        </div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-lg-6">
            <div class="panel panel-success download-panel">
                <div class="panel-heading">
                    <strong><?= __('messages.spawns.Central') ?></strong>
                </div>
                <div class="panel-body">
                    <p>
                        <code>/center</code>
                    </p>
                    <p>
                        <b><?= __('messages.spawn.Keepers') ?>:</b>
                        <div>
                            <b class="label label-keeper">@VladTs</b>
                            <b class="label label-keeper">@Alek</b>
                            <b class="label label-keeper">@Vasiliy_Rus</b>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <h2 class="center">
        <a class="btn btn-success btn-lg" href="/play"><?= __('messages.Play') ?></a>
    </h2>

@endsection
