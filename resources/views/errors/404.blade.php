@extends('layouts.app')

@section('jumbotron')
    <div class="jumbotron reduced not-found">
        <div class="center">
            <h1>Страница не найдена</h1>
        </div>
    </div>
@endsection

@section('content')
    <img style="float:left;margin: -5px 40px 0 0;"
         src="/img/unknown_node.jpg"
         alt="unknown_node">

    <h2>Пардон, страница не найдена!</h2>

    <p>
        Пожалуйста, сообщите нам о пропавшей странице:<br>
        <a href="https://github.com/lord-server/lord-server.ru/issues" target="_blank">
            сообщить об ошибке на сайте
        </a>.
    </p>
@endsection
