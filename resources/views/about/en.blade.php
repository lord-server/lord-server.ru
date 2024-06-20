@extends('layouts.app')
@section('title', __('messages.About Server'))

@section('jumbotron')
    <div class="jumbotron">
        <div class="center">
            <h1>@yield('title')</h1>
            <p>
                <?= __('messages.jumbo.phrase.about') ?>
                        <!-- Найти друга мало, нужно еще спасти его. -->
            </p>
            <p>
                <a class="btn btn-success btn-lg" href="/play"><?= __('messages.Play') ?></a>
            </p>
        </div>
    </div>
@endsection


@section('content')
    <h2 class="center">Game server in LotR style</h2>

    <div class="row">
        <div class="
 col-xs-offset-0 col-xs-12
 col-sm-offset-1 col-sm-10
 col-md-offset-2 col-md-8
 ">
            <p>
                Russian server Minetest based on the legendarium of J. Tolkien ("The Lord of the Rings", "The Hobbit", ...), where players -
                Some alone, some in a squad, some in a clan - they write the history of our server:
                they work, rest, trade, fight... In a word, alone or with friends they show their valor!
            </p>
            <p>
                Are you an elf or an orc, are you a dwarf, a man or, perhaps, a hobbit - in our little Middle-earth
                everyone will find a cozy corner where they can wait and wait for home, and a long journey,
                where some adventure will find you.
            </p>
        </div>
    </div>
    <div>

        <h2>Game on LORD</h2>
        <h3>Game Start:</h3>
        <p>
            Appearing in the world, you choose a character's <b>race</b>:
            <strong class="colored">People</strong>, <strong class="colored">Gnomes</strong>,
            <strong class="colored">Elves</strong>, <strong class="colored">Hoobbits</strong>,
            <strong class="colored">Orcs</strong>, - and its <strong>gender</strong> and <strong>skin</strong>,
            and then begin a fascinating journey through the magical world of Tolkien.
        </p>


        <h3>Races and Spawns</h3>
        <p>
            Each race has its own spawn, where you appear after choosing it.
        </p>
        <p>
            You will be taken to the spawn of your race using the traditional command <code>/spawn</code>.<br>
            Ancient central, universal spawn - <code>/center</code>.<br>
            In addition, you can get to the elven spawn “Hall of Life” with the command <code>/life</code>,
            and for the orc spawn “Chamber of Death” - <code>/death</code>.
        </p>
        <p>
            Each racial spawn has <span class="colored">Watchers</span> (see below).
        </p>


        <h3>Crafting recipes</h3>
        <p>
            In our little Middle-earth, everyone keeps books with crafting recipes with them. There are many of these books
            but first you have to craft <span class="colored">"Book "Crafting Basics""</span>.
            Don't know how? Look around at any spawn and find posters with crafting recipes,
            that will make this book possible.
        </p>
        <p>
            Crafting ingredients will help you find NPCs standing at spawns who will be happy to answer your questions.
        </p>
        <p>
            “Basics of Crafting” will begin your immersion into the abyss of knowledge about crafts, and there are still dozens of books written by
            players...
        </p>

        <h3>Keepers</h3>
        <p>
            If you are a beginner and are just looking around, our team will help and advise you
            <span class="colored">Keepers</span> Spawns.<br>
        </p>
        <p>
            If you want to settle closer to the spawn, they will help you find a place.
        </p>
        <p>
            In addition, <span class="colored">Keepers</span> notify people about current <strong>events</strong> - thematic events.
        </p>

        <h2>Events</h2>
        <p>
            We conduct a series of activities - events, the implementation of which is for the benefit of your people or to the detriment of others.
        </p>
        <p>
            <strong class="colored">Racial units</strong>.
        </p>
        <p>
            If you are no stranger to team play and a lot of interesting movement, then join the squads and troops of your Spawn!
        </p>
        <p>
            Ask the <span class="colored">Overseers</span> for tasks - for the benefit of your Spawn, “in spite of” the other Spawn, kind and
            humorous,
            and sometimes insidious - in general, participate, offer, develop your race and develop yourself.
        </p>

        <h2>Construction</h2>
        <p>
            It has long been the custom that our server, as befits a sandbox game, is one big and never-ending construction site!
        </p>
        <p>
            Players are constantly building objects of different scales: small villages mentioned in Tolkien’s legendarium and invented independently
            cities, spawns for different peoples of Middle-earth and a great many other amazing places and places.
        </p>
        <p>
            Do you feel the spirit of <span class="colored">Builder</span>? - go ahead, send screenshots of your buildings and join the team
            one of the facilities under construction.
        </p>

        <h2>Clans</h2>
        <p>
            Have you figured it all out yet?
        </p>
        <p>
            We took part in construction, fought in racial squads, killed a bunch of <strong>Nazguls</strong> and
            <strong>Balrogs</strong>? And now you want to organize your own movement?
        </p>
        <p>
            Maybe you would like to register your <strong>Clan</strong>, which set foot on the path of new adventures...
        </p>

        <h3 class="center">
            <a class="btn btn-success btn-lg" href="/play"><?= __('messages.Play') ?></a>
        </h3>

    </div>
@endsection
