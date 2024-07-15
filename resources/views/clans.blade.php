<?php
use App\Models\Clan;

/** @var Clan[] $clans */

?>
@extends('layouts.app')
@section('title', __('messages.Server clans'))

@section('jumbotron')
    <div class="jumbotron">
        <div class="center">
            <h1>@yield('title')</h1>
            <p>
                <?= __('messages.jumbo.phrase.clans') ?>
            </p><p>
                <a class="btn btn-success btn-lg" href="/play"><?= __('messages.Play') ?></a>
            </p>
        </div>
    </div>
@endsection


@section('content')
    <h2></h2>

    <div class="clan-list">

        <?php foreach ($clans as $clan): ?>
        <a href="#/clans/<?= $clan->name ?>" class="thumbnail">
            <div class="row clan clearfix">
                <div class="col-xs-12 col-sm-3">
                    <div class="img-thumbnail">
                        <img src="/img/clans/<?= $clan->name ?>.png" alt="<?= $clan->name ?>" class="img-responsive img-circle">
                    </div>
                </div>
                <div class="clearfix visible-xs-block"></div>
                <div class="clan-info caption col-xs-12 col-sm-9">
                    <h3 class="clan-title">
                        <?= $clan->title ?>
                        <label class="pull-right label label-clan-<?= $clan->is_online ? 'online' : 'offline' ?>"
                               data-toggle="tooltip" title="<?= __($clan->is_online ? 'messages.Now in game' : 'messages.Now offline') ?>"
                        >
                            <i class="fa fa-xs fa-circle text-<?= $clan->is_online ? 'online' : 'offline' ?>"></i>
                            <?= $clan->is_online ? 'online' : 'offline' ?>
                        </label>
                    </h3>
                    <p>
                        <?= $clan->about ?>
                    </p>
                    <div class="col-xs-12">
                        <div class="pull-right clan-members">
                            <?php foreach ($clan->players as $player): ?>
                                <?php if ($player->isLeaderOf($clan)): ?>
                                    <?php
                                        $tooltip = ($player->isNegotiatorOf($clan)
                                            ? __('messages.Leader and Negotiator')
                                            : __('messages.Leader')
                                        ) . ' ' . __('messages.of the clan')
                                    ?>
                                    <b class="label label-success" data-toggle="tooltip" title="<?= $tooltip ?>"><?= $player->name ?></b>
                                <?php elseif ($player->isNegotiatorOf($clan)): ?>
                                    <b class="label label-info"
                                       data-toggle="tooltip" title="<?= __('messages.Negotiator') ?> <?= __('messages.of the clan') ?>"
                                    ><?= $player->name ?></b>
                                <?php else: ?>
                                    <b class="label label-default"><?= $player->name ?></b>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </a>
        <?php endforeach; ?>

    </div>
@endsection
