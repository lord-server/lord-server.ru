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
            <div class="panel panel-success spawn-panel">
                <div class="panel-heading">
                    <strong><?= __('messages.spawns.Orcish') ?>:</strong>
                    <?= __('messages.spawns.Orcish_name') ?>
                </div>
                <div class="panel-body">
                    <div>
                        <img class="img-responsive" src="img/spawns/orcish.jpg" alt="Orcish Spawn">
                    </div>
                    <div>
                        <b class="spawn-role-header"><?= __('messages.roles.Keepers') ?>:</b>
                        <div>
                            <b class="label label-keeper">@Lester_Grazziano</b>
                            <b class="label label-keeper">@SuperKate</b>
                        </div>
                    </div>
                    <div>
                        <b class="spawn-role-header"><?= __('messages.roles.Squad') ?>:</b>
                        <div>
                            <b class="label label-squad">@Semi</b>
                            <b class="label label-squad">@TheWoLFrAm</b>
                            <b class="label label-squad">@Vldslv</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-lg-6">
            <div class="panel panel-success spawn-panel">
                <div class="panel-heading">
                    <strong><?= __('messages.spawns.Human') ?>:</strong>
                    <?= __('messages.spawns.Human_name') ?>
                </div>
                <div class="panel-body">
                    <div>
                        <img class="img-responsive" src="img/spawns/human.jpg" alt="Human Spawn">
                    </div>
                    <div>
                        <b class="spawn-role-header"><?= __('messages.roles.Keepers') ?>:</b>
                        <div>
                            <b class="label label-keeper">&lt;<?= __('messages.roles.vacancy') ?>&gt;</b>
                            <b class="label label-keeper">@Pilsner_human</b>
                        </div>
                    </div>
                    <div>
                        <b class="spawn-role-header"><?= __('messages.roles.Squad') ?>:</b>
                        <div>
                            <b class="label label-squad">@Alges</b>
                            <b class="label label-squad">@Arseny_-</b>
                            <b class="label label-squad">@Zhekil_mason</b>
                            <b class="label label-squad">@Smith_</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <div class="panel panel-success spawn-panel">
                <div class="panel-heading">
                    <strong><?= __('messages.spawns.Hobbit') ?>:</strong>
                    <?= __('messages.spawns.Hobbit_name') ?>
                </div>
                <div class="panel-body">
                    <div>
                        <img class="img-responsive" src="img/spawns/hobbit.jpg" alt="Hobbit Spawn">
                    </div>
                    <div>
                        <b class="spawn-role-header"><?= __('messages.roles.Keepers') ?>:</b>
                        <div>
                            <b class="label label-keeper">@Shishka</b>
                            <b class="label label-keeper">@Shorty_Petus</b>
                        </div>
                    </div>
                    <div>
                        <b class="spawn-role-header"><?= __('messages.roles.Squad') ?>:</b>
                        <div>
                            <b class="label label-squad">&lt;<?= __('messages.roles.vacancy') ?>&gt;</b>
                            <b class="label label-squad">&lt;<?= __('messages.roles.vacancy') ?>&gt;</b>
                            <b class="label label-squad">&lt;<?= __('messages.roles.vacancy') ?>&gt;</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-lg-6">
            <div class="panel panel-success spawn-panel">
                <div class="panel-heading">
                    <strong><?= __('messages.spawns.Elven') ?></strong>
                    <?= __('messages.spawns.Elven_name') ?>
                </div>
                <div class="panel-body">
                    <div class="actively-builds">
                        <p><b>&lt;<?= __('messages.actively-builds') ?>&gt;</b></p>
                        <img class="img-responsive" src="img/spawns/actively-builds.jpg" alt="Elven Spawn">
                    </div>
                    <div>
                        <b class="spawn-role-header"><?= __('messages.roles.Keepers') ?>:</b>
                        <div>
                            <b class="label label-default text-muted">&lt;<?= __('messages.roles.vacancy-later') ?>&gt;</b>
                            <b class="label label-default text-muted">&lt;<?= __('messages.roles.vacancy-later') ?>&gt;</b>
                        </div>
                    </div>
                    <div>
                        <b class="spawn-role-header"><?= __('messages.roles.Squad') ?>:</b>
                        <div>
                            <b class="label label-default text-muted">&lt;<?= __('messages.roles.vacancy-later') ?>&gt;</b>
                            <b class="label label-default text-muted">&lt;<?= __('messages.roles.vacancy-later') ?>&gt;</b>
                            <b class="label label-default text-muted">&lt;<?= __('messages.roles.vacancy-later') ?>&gt;</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <div class="panel panel-success spawn-panel">
                <div class="panel-heading">
                    <strong><?= __('messages.spawns.Dwarven') ?></strong>
                </div>
                <div class="panel-body">
                    <div class="actively-builds">
                        <p><b>&lt;<?= __('messages.actively-builds') ?>&gt;</b></p>
                        <img class="img-responsive" src="img/spawns/actively-builds.jpg" alt="Dwarven Spawn">
                    </div>
                    <div>
                        <b class="spawn-role-header"><?= __('messages.roles.Keepers') ?>:</b>
                        <div>
                            <b class="label label-keeper">@Vasiliy_Rus</b>
                            <b class="label label-default text-muted">&lt;<?= __('messages.roles.vacancy-later') ?>&gt;</b>
                        </div>
                    </div>
                    <div>
                        <b class="spawn-role-header"><?= __('messages.roles.Squad') ?>:</b>
                        <div>
                            <b class="label label-default text-muted">&lt;<?= __('messages.roles.vacancy-later') ?>&gt;</b>
                            <b class="label label-default text-muted">&lt;<?= __('messages.roles.vacancy-later') ?>&gt;</b>
                            <b class="label label-default text-muted">&lt;<?= __('messages.roles.vacancy-later') ?>&gt;</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-lg-6">
            <div class="panel panel-success spawn-panel">
                <div class="panel-heading">
                    <strong><?= __('messages.spawns.Central') ?></strong>
                </div>
                <div class="panel-body">
                    <div>
                        <img class="img-responsive" src="img/spawns/central.jpg" alt="Central Spawn" style="opacity:60%">
                    </div>
                    <div>
                        <b class="spawn-role-header"><?= __('messages.Command') ?>:</b>
                        <code>/center</code>
                    </div>
                    <div>
                        <b class="spawn-role-header"><?= __('messages.roles.Keepers') ?>:</b>
                        <div>
                            <b class="label label-keeper">@VladTs</b>
                            <b class="label label-keeper">@Alek</b>
                            <b class="label label-keeper">@Vasiliy_Rus</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <h2 class="center">
        <a class="btn btn-success btn-lg" href="/play"><?= __('messages.Play') ?></a>
    </h2>

@endsection
