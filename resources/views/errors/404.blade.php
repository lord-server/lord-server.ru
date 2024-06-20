@extends('layouts.app')
@section('title', __('messages.Page not found'))



@section('content')
    <img style="float:left;margin: -5px 40px 0 0;"
         src="/img/unknown_node.jpg"
         alt="unknown_node">

    <h2><?= __('messages.Sorry, page not found!') ?></h2>

    <p>
        <?= __('messages.Please let us know about the missing page') ?>:<br>
        <a href="https://github.com/lord-server/lord-server.ru/issues/new" target="_blank">
            <?= __('messages.report an error on the website') ?>
        </a>.
    </p>
@endsection
