@extends('layouts.app')

@section('title', __('messages.Clans Rules'))

@section('content')
    <div class="row">
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li role="tab"><a href="/rules"><?= __('messages.Common Rules') ?></a></li>
            <li role="tab" class="active"><a href="/clans-rules"><?= __('messages.Clans Rules') ?></a></li>
        </ul>

        <div class="panel panel-body rules-canvas">
            <h2>Creating a clan:</h2>
            <h3>Clan requirements:</h3>
            <ul>
                <li>From 3 people</li>
                <li>The head or representative is a veteran/permanent player</li>
            </ul>
            <h3>When registering, the clan provides:</h3>
            <ul>
                <li>Who is the head of <s class="required">*</s></li>
                <li>Who is the representative (at meetings) <s class="required">*</s></li>
                <li>List of participants <s class="required">*</s></li>
                <li>Logo (minimum size 600 x 600) <s class="required">*</s></li>
                <li>Description:
                    <ul>
                        <li>Short <s class="required">*</s></li>
                        <li>Full (Charter / Regulations / etc.)</li>
                    </ul>
                </li>
                <li>Fee: 100 diamonds <s class="required">*</s></li>
            </ul>
            <h4>Further contributions:</h4>
            <ul>
                <li>150 diamonds per quarter</li>
            </ul>
            <h3>The administration provides:</h3>
            <ul>
                <li>Tag in Discord</li>
                <li>Discord channel (if needed)</li>
                <li>Description on the site</li>
                <li>A place for representation not far from the spawn (at a general meeting of clan representatives) no earlier than in 2-4 weeks</li>
                <li>Possibility of publishing clan news in discord and VK for def. fee (if the text is approved by a journalist)</li>
                <li>For additional features, see below</li>
            </ul>

            <h2>Clan rules:</h2>
            <h3>Briefly:</h3>
            <ul>
                <li>
                    <b>you can:</b> organize raids, robberies, attacks, etc. on another clan <b><i>only</i></b> if you yourself are a member of the
                    clan.<br>
                    <!--i>(note: the attacked clan must give prior consent to such activity)</i-->
                </li>
                <li>
                    <b>you cannot:</b> rob, attack, etc. for ordinary players (general rules apply to ordinary players)
                </li>
            </ul>
            <h3>More details:</h3>
            <ul>
                <li><b>you can:</b> rob and organize raids on the base of another clan</li>
                <li><b>you can:</b> use the “Clan Chest”</li>
                <li><b>there should:</b> be a publicly accessible path to the chests (<b><i>not</i></b> behind sealed walls, doors, etc.)</li>
                <li><b>you can:</b> search the database if participants are not online</li>
                <li><b>you can:</b> organize minor pranks at the enemy’s base (leave a sign “Vasya was here”) if the participants are not online</li>
                <li><b>you cannot:</b> use locked and personal chests, except for regular and clan ones</li>
                <li><b>You cannot:</b> break or destroy the base and any buildings (only take from chests), with the exception of minor pranks that
                    carry
                    some meaning or obvious joke
                </li>
                <li><b>prohibited:</b> any interactions between clan and other player accounts</li>
            </ul>
            <h3>About the loot:</h3>
            <h4>Loot from other clans:</h4>
            <ul>
                <li><b>should:</b> be stored only in clan chests.</li>
                <li><b>you can:</b> install such chests in public caches</li>
                <li><b>you cannot:</b> store the loot in other places</li>
                <li><b>you cannot:</b> store loot in different locations (different bases)</li>
                <li><b>you can:</b> transfer loot only in the general inventory</li>
                <li><b>you cannot:</b> carry loot in bags</li>
            </ul>

            <h3>Punishment:</h3>
            <h4>For violation of any rules, the general punishment is:</h4>
            <ul>
                <li><b>fine:</b> 150 diamond coins</li>
                <li><b>time:</b> the fine must be paid within 7 days</li>
                <li><b>delay:</b> if payment is not made, the administration disables the clan</li>
            </ul>

            <h2>Additional features:</h2>
            <h3>Personalized cloak for your clan:</h3>
            <ul>
                <li>Fee for adding to the game: 200 alm. from the clan</li>
                <li>In-game withdrawal fee: 50 alm. per piece (not issued more than players in the clan)</li>
            </ul>

        </div>
    </div>
@endsection
