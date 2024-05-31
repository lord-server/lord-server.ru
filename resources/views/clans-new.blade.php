<?php
use App\Models\Clan;

/** @var Clan[] $clans */

?>
@extends('layouts.app')
@section('title', 'Кланы сервера')


@section('content')
    <h2></h2>

    <div class="row clan-list">

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
                    <h3 class="clan-title"><?= $clan->title ?></h3>
                    <p>
                        <?= $clan->about ?>
                    </p>
                    <div class="col-xs-12">
                        <div class="pull-right clan-members">
                            <?php foreach ($clan->players as $player): ?>
                                <?php if ($player->isLeaderOf($clan)): ?>
                                    <?php $tooltip = ($player->isNegotiatorOf($clan) ? 'Глава и Представитель' : 'Глава') . ' клана' ?>
                                    <b class="label label-success" data-toggle="tooltip" title="<?= $tooltip ?>"><?= $player->name ?></b>
                                <?php elseif ($player->isNegotiatorOf($clan)): ?>
                                    <b class="label label-info" data-toggle="tooltip" title="Представитель клана"><?= $player->name ?></b>
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
