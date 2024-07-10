<?php
use App\Models\Player;
use Illuminate\Pagination\LengthAwarePaginator;


/** @var $players Player[]|LengthAwarePaginator */

$position = $players->firstItem();

?>
@extends('layouts.app')
@section('title', __('messages.Players'))

@section('content')
    <div class="row">
        <div class="col-lg-offset-2 col-lg-8">
            <table class="table table-hover">
                <?php foreach ($players as $player): ?>
                <tr>
                    <th scope="row" width="1%">
                        <?= $position++ ?>
                    </th>
                    <td width="1%" class="hidden-xs">
                        <i class="fa fa-xs fa-circle text-<?= $player->is_online ? 'online' : 'offline' ?>"
                           data-toggle="tooltip" title="<?= __($player->is_online ? 'messages.Now in game' : 'messages.Now offline') ?>"
                        ></i>
                    </td>
                    <td width="1%">
                        <b><?= $player->name ?></b>
                    </td>
                    <td width="1%" class="hidden-xs">
                        <span class="label label-small label-p-race <?= $player->race ?>"><?= $player->race ?></span>
                    </td>
                    <td width="1%" class="hidden-xs">
                        <span class="label label-small label-p-gender <?= $player->gender ?>"><?= $player->gender ?></span>
                    </td>
                    <td align="right">
                        <i class="small" data-toggle="tooltip" title="<?= __('messages.Last entry into the game') ?>">
                            <?= $player->last_login->diffForHumans() ?>
                        </i>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <div class="pull-right">
                <?= $players->links() ?>
            </div>
        </div>
    </div>

@endsection
