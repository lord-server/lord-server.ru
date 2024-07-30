@extends('layouts.app')
@section('title', __('messages.Spawns'))

@section('jumbotron')
    <div class="jumbotron">
        <div class="center">
            <h1>@yield('title')</h1>
            <p>
                <?= __('messages.jumbo.phrase.spawns') ?>
            </p>
        </div>
    </div>
@endsection


@section('content')
    <h2 class="center"><?= __('messages.Where players are born') ?></h2>

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
                        <b><?= __('messages.roles.Keepers') ?>:</b>
                        <div>
                            <b class="label label-keeper">@Lester_Grazziano</b>
                            <b class="label label-keeper">@SuperKate</b>
                        </div>
                    </p>
                    <p>
                        <b><?= __('messages.roles.Squad') ?>:</b>
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
                        <b><?= __('messages.roles.Keepers') ?>:</b>
                        <div>
                            <b class="label label-keeper">@VladTs</b>
                            <b class="label label-keeper">@Pilsner</b>
                        </div>
                    </p>
                    <p>
                        <b><?= __('messages.roles.Squad') ?>:</b>
                        <div>
                            <b class="label label-squad">@Alges</b>
                            <b class="label label-squad">@Arseny_-</b>
                            <b class="label label-squad">@Zhekil_mason</b>
                            <b class="label label-squad">@Smith_</b>
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
                        <img class="img-responsive" src="img/spawns/hobbit.png" alt="Hobbit Spawn">
                    </p>
                    <p>
                        <b><?= __('messages.roles.Keepers') ?>:</b>
                        <div>
                            <b class="label label-keeper">@Shishka</b>
                            <b class="label label-keeper">&lt;<?= __('messages.roles.vacancy') ?>&gt;</b>
                        </div>
                    </p>
                    <p>
                        <b><?= __('messages.roles.Squad') ?>:</b>
                        <div>
                            <b class="label label-squad">&lt;<?= __('messages.roles.vacancy') ?>&gt;</b>
                            <b class="label label-squad">&lt;<?= __('messages.roles.vacancy') ?>&gt;</b>
                            <b class="label label-squad">&lt;<?= __('messages.roles.vacancy') ?>&gt;</b>
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
                        <i style="position: absolute;">&lt;<?= __('messages.actively-builds') ?>&gt;</i>
                        <img class="img-responsive" src="img/spawns/hobbit.png" alt="Hobbit Spawn" style="opacity: 0">
                    </p>
                    <p>
                        <b><?= __('messages.roles.Keepers') ?>:</b>
                        <div>
                            <b class="label label-default text-muted">&lt;<?= __('messages.roles.vacancy-later') ?>&gt;</b>
                            <b class="label label-default text-muted">&lt;<?= __('messages.roles.vacancy-later') ?>&gt;</b>
                        </div>
                    </p>
                    <p>
                        <b><?= __('messages.roles.Squad') ?>:</b>
                        <div>
                            <b class="label label-default text-muted">&lt;<?= __('messages.roles.vacancy-later') ?>&gt;</b>
                            <b class="label label-default text-muted">&lt;<?= __('messages.roles.vacancy-later') ?>&gt;</b>
                            <b class="label label-default text-muted">&lt;<?= __('messages.roles.vacancy-later') ?>&gt;</b>
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
                        <i class="text-muted">&lt;<?= __('messages.planned') ?>&gt;</i>
                    </p>
                    <p>
                        <b><?= __('messages.roles.Keepers') ?>:</b>
                        <div>
                            <b class="label label-default text-muted">&lt;<?= __('messages.roles.vacancy-later') ?>&gt;</b>
                            <b class="label label-default text-muted">&lt;<?= __('messages.roles.vacancy-later') ?>&gt;</b>
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
                        <b><?= __('messages.roles.Keepers') ?>:</b>
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
