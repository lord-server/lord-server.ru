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
                    <td width="1%">
                        <b><?= $player->name ?></b>
                    </td>
                    <td align="left" class="hidden-xs"><span class="label label-small label-default">
                            <?= $player->race ?></span></td>
                    <td align="right">
                        <i class="small" data-toggle="tooltip" title="Последний вход в игру">
                            <?= $player->last_login->diffForHumans() ?>
                        </i>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <div class="pull-right">
                {{ $players->links() }}
            </div>
        </div>
    </div>

@endsection
