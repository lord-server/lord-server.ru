@extends('layouts.app')

@section('title', __('messages.Server Rules'))

@section('content')
    <div class="row">
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li role="tab" class="active"><a href="/rules"><?= __('messages.Common Rules') ?></a></li>
            <li role="tab"><a href="/clans-rules"><?= __('messages.Clans Rules') ?></a></li>
        </ul>

        <div class="panel panel-body rules-canvas">
            <h2>I. Player Rights:</h2>
            <ul class="media-list">
                <li><b>1.1.</b> Each Player of the server [RU] L.O.R.D. has the right to personal opinion and views.</li>
                <li><b>1.2.</b> “You can dig. You don’t have to dig..." Can be built in areas not
                    belonging to other Players or the server Administration (the territory should not
                    be under the protection of someone else's protective block (protect) or protective field
                    areas). If you want to build next to someone else's building, you should
                    coordinate this with the owner of the existing building.</li>
                <li><b>1.3.</b> Protect yourself and your building from other Players with weapons and traps.</li>
                <li><b>1.4.</b> Participate in the life of the server [RU] L.O.R.D. and <a href="https://vk.com/minetest_lord" target="_blank">
                        groups in VK</a>, propose new ideas that contribute to the development of the server [RU] L.O.R.D. and groups.</li>
                <li><b>1.5.</b> Contact the server Administration with questions, complaints and suggestions.</li>
                <li><b>1.6.</b> Report to the server Administration about violations of these server rules [RU] L.O.R.D. —
                    anonymity is guaranteed.</li>
            </ul>


            <h2>II. Strictly prohibited:</h2>
            <ul class="media-list">
                <li><b>2.1.</b> <b>Grifing</b> - destruction of other people's property, theft of things, illegal
                    penetration into other people's structures and similar destructive actions.
                    <p class="punishment">Form of punishment:<br>
                        first violation - warning;<br>
                        second violation - blocking the ability to build/destroy for a day;<br>
                        third violation - blocking a character.</p></li>
                <li><b>2.2.</b> Use of Known Bugs and Significant Vulnerabilities Affecting
                    server performance [RU] L.O.R.D. .
                    <p class="punishment">Form of punishment:<br>
                        first violation - warning;<br>
                        second violation - blocking a character.</p></li>
                <li><b>2.3.</b> Damage to the area without further development (Cut down a tree - collect leaves
                    and branches, plant a new tree!).
                    <p class="punishment">Form of punishment:<br>
                        first violation - warning;<br>
                        subsequent violations - blocking the ability to build/destroy for a day.</p></li>
                <li><b>2.4.</b> Creation of structures that are similar in appearance to genitals.
                    <p class="punishment">Form of punishment:<br>
                        first violation - warning;<br>
                        second violation - blocking a character.</p></li>
                <li><b>2.5.</b> Flood, flame, spam, caps.
                    <p><b>Flood</b> - non-thematic messages in chat, more than 5 short messages in a row
                        from one Player (if it is possible to combine these messages into one single phrase),
                        repetition of one or more similar phrases, more often than 1 message every 3 minutes, here
                        include sports chants and slogans. Also advertising services more often than 1 message per time
                        10 minutes. Begging is also equivalent to flooding.</p>
                    <p><b>Flame</b> - messaging, which is a verbal
                        war (often no longer related to the original cause of the dispute.
                        Flame messages may contain personal insults and are often
                        are aimed at further inciting a quarrel).</p>
                    <p><b>Spam</b> - chat cluttering in any form, namely sending to
                        chat meaningless messages or messages that are not related in meaning.</p>
                    <p><b>CAPS</b> - writing using capital letters or punctuation marks 50% or more
                        composition of the message.</p>
                    <p class="punishment">Form of punishment:<br>
                        first violation - warning;<br>
                        second violation - blocking the ability to use chat and DM for 15 minutes;<br>
                        subsequent violations - blocking the ability to use chat and DM for a day.</p></li>
                <li><b>2.6.</b> Insulting other players without using swear words, provoking
                    insult/swearing, unfounded public accusation, use of offensive
                    derivative words from character names, misinformation.
                    <p class="punishment">Form of punishment:<br>
                        first violation - warning;<br>
                        second violation - block
        </div>
    </div>
@endsection
