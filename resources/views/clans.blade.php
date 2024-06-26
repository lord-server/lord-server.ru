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

<div class="row clan-list">

    <a href="#/clans/international" class="thumbnail">
        <div class="row clan">
            <div class="col-xs-12 col-sm-3">
                <div class="img-thumbnail">
                    <img src="/img/clans/international.png" alt="international" class="img-responsive img-circle">
                </div>
            </div>
            <div class="clan-info caption col-xs-12 col-sm-9">
                <h3 class="clan-title">International</h3>
                <p>
                    Клан "Интернационал" – это группа людей, объединившихся для совместной работы, чтобы получать больше выгоды.
                    Мы вместе добываем ресурсы, вместе защищаем свою территорию. Каждый в клане равен и может рассчитывать на помощь других.<br>
                    Мы ценим взаимовыручку и уважение как к членам клана, так и к другим людям.
                </p>
                <div class="col-xs-12">
                    <div class="pull-right clan-members">
                        <b class="label label-success" data-toggle="tooltip" title="Глава клана">@Alges</b>
                        <b class="label label-default">@Shishka_Intern</b>
                        <b class="label label-default">@Dasada</b>
                        <b class="label label-default">@Sakamoto</b>
                        <b class="label label-default">@Stesrr</b>
                        <b class="label label-default">@RPNK</b>
                        <b class="label label-default">@Cheika</b>
                        <b class="label label-default">@Vvb</b>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <a href="#/clans/masons" class="thumbnail">
        <div class="row clan">
            <div class="col-xs-12 col-sm-3 clan-logo">
                <div class="img-thumbnail">
                    <img src="/img/clans/masons.png" alt="Free Masons" class="img-responsive">
                </div>
            </div>
            <div class="clan-info caption col-xs-12 col-sm-9">
                <h3 class="clan-title">Вольные Каменщики</h3>
                <p>
                    Вольные Каменщики (или Масоны) это группа строителей объединённых целью создания хороших построек.
                </p>
                <div class="col-xs-12">
                    <div class="pull-right clan-members">
                        <b class="label label-success" data-toggle="tooltip" title="Глава клана">@Petus_mason</b>
                        <b class="label label-default">@Swed_mason</b>
                        <b class="label label-default">@Alek_mason</b>
                        <b class="label label-default">@Dormi_mason</b>
                        <b class="label label-default">@JikiSo_mason</b>
                        <b class="label label-default">@Zhekil_mason</b>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <a href="#/clans/vassals" class="thumbnail">
        <div class="row clan">
            <div class="col-xs-12 col-sm-3">
                <div class="img-thumbnail">
                    <img src="/img/clans/vassals.png" alt="Vassals" class="img-responsive img-circle">
                </div>
            </div>
            <div class="clan-info caption col-xs-12 col-sm-9">
                <h3 class="clan-title">Вассалы</h3>
                <p>
                    Клан "Вассалы" – сила, покоряющая пространство и время в своем постоянном стремлении к добыче ресурсов и процветанию.
                    История клана глубоко уходит в прошлое, начиная с его основания, когда несколько предпринимательски настроенных отважных душ
                    решили объединить свои усилия и стать силой, способной перестраивать мир вокруг них.
                </p>
                <div class="col-xs-12">
                    <div class="pull-right clan-members">
                        <b class="label label-success" data-toggle="tooltip" title="Глава клана">@Pilsner_vassal</b>
                        <b class="label label-default">@PePe_vassal</b>
                        <b class="label label-default">@JVD_vassal</b>
                        <b class="label label-default">@Semi_vassal</b>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <a href="#/clans/hanza" class="thumbnail">
        <div class="row clan">
            <div class="col-xs-12 col-sm-3">
                <div class="img-thumbnail">
                    <img src="/img/clans/hanza.png" alt="hanza" class="img-responsive img-circle">
                </div>
            </div>
            <div class="clan-info caption col-xs-12 col-sm-9">
                <h3 class="clan-title">Ганза</h3>
                <p>Добро пожаловать в Ганзу!</p>
                <p>
                    Мы – объединение торговцев, стремящихся к процветанию и защите своей территории в мире L.O.R.D. .<br>
                    Мы ценим взаимопомощь, командную игру и уважение к каждому участнику клана.
                    Присоединяйтесь к нам, если вы готовы к испытаниям, амбициозны и стремитесь к большим деньгам и связям!
                </p>
                <div class="col-xs-12">
                    <div class="pull-right clan-members">
                        <b class="label label-success" data-toggle="tooltip" title="Глава клана">@Qundark</b>
                        <b class="label label-default">@Kema</b>
                    </div>
                </div>
            </div>
        </div>
    </a>

</div>
@endsection
