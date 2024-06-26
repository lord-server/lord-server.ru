@extends('layouts.app')

@section('title', __('messages.Server Rules'))

@section('content')
    <div class="row">
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li role="tab" class="active"><a href="/rules"><?= __('messages.Common Rules') ?></a></li>
            <li role="tab"><a href="/clans-rules"><?= __('messages.Clans Rules') ?></a></li>
        </ul>

        <div class="panel panel-body rules-canvas">
            <h2>I. Права Игроков:</h2>
            <ul class="media-list">
                <li><b>1.1.</b> Каждый Игрок сервера [RU] L.O.R.D. имеет право на личное мнение и взгляды.</li>
                <li><b>1.2.</b> «Можно копать. Можно не копать…». Можно строить на территориях, не
                    принадлежащих другим Игрокам или Администрации сервера (территория не должна
                    быть под защитой чужого защитного блока (протекта) или защитного поля
                    areas). Если хотите строиться рядом с чьей-то постройкой, стоит
                    согласовать это с хозяином уже существующей постройки.</li>
                <li><b>1.3.</b> Защитить себя и своё сооружение от других Игроков оружием и ловушками.</li>
                <li><b>1.4.</b> Участвовать в жизни сервера [RU] L.O.R.D. и <a href="https://vk.com/minetest_lord" target="_blank">
                        группы в ВК</a>, предлагать новые идеи, способствующие развитию сервера [RU] L.O.R.D. и группы.</li>
                <li><b>1.5.</b> Обращаться к Администрации сервера с вопросами, жалобами и предложениями.</li>
                <li><b>1.6.</b> Сообщать Администрации сервера о нарушениях настоящих правил сервера [RU] L.O.R.D. —
                    анонимность гарантируется.</li>
            </ul>


            <h2>II. Категорически запрещено:</h2>
            <ul class="media-list">
                <li><b>2.1.</b> <b>Грифинг</b> - разрушение чужого имущества, воровство вещей, незаконное
                    проникновение в чужие сооружения и подобные деструктивные действия.
                    <p class="punishment">Форма наказания:<br>
                        первое нарушение - предупреждение;<br>
                        второе нарушение - блокирование возможности строить/разрушать на сутки;<br>
                        третье нарушение - блокирование персонажа.</p></li>
                <li><b>2.2.</b> Использование Известных багов и существенных Уязвимостей, влияющих на
                    работоспособность сервера [RU] L.O.R.D. .
                    <p class="punishment">Форма наказания:<br>
                        первое нарушение - предупреждение;<br>
                        второе нарушение - блокирование персонажа.</p></li>
                <li><b>2.3.</b> Порча местности без обустройства в дальнейшем (Срубил дерево – собери листву
                    и ветки, посади новое дерево!).
                    <p class="punishment">Форма наказания:<br>
                        первое нарушение - предупреждение;<br>
                        последующие нарушения - блокирование возможности строить/разрушать на сутки.</p></li>
                <li><b>2.4.</b> Создание сооружений, внешне схожих с половыми органами.
                    <p class="punishment">Форма наказания:<br>
                        первое нарушение - предупреждение;<br>
                        второе нарушение - блокирование персонажа.</p></li>
                <li><b>2.5.</b> Флуд, флейм, спам, капс.
                    <p><b>Флуд</b> - не тематические сообщения в чате, более 5 коротких сообщений подряд
                        от одного Игрока (при возможности объединения этих сообщений в одну цельную фразу),
                        повторение одной и более однотипных фраз, чаще, чем 1 сообщение раз в 3 минуты, сюда же
                        относятся спортивные речёвки и лозунги. Также реклама услуг чаще, чем 1 сообщение раз в
                        10 минут. Также к флуду приравнивается попрошайничество.</p>
                    <p><b>Флейм</b> - обмен сообщениями, представляющий собой словесную
                        войну (нередко уже не имеющую отношения к первоначальной причине спора.
                        Сообщения флейма могут содержать личные оскорбления, и зачастую
                        направлены на дальнейшее разжигание ссоры).</p>
                    <p><b>Спам</b> - захламление чата в любой форме, а именно - отправка в
                        чат бессмысленных сообщений или сообщений не связанных по смыслу.</p>
                    <p><b>КАПС</b> - написание, используя заглавные буквы или знаки препинания в 50 % или более
                        состава сообщения.</p>
                    <p class="punishment">Форма наказания:<br>
                        первое нарушение - предупреждение;<br>
                        второе нарушение - блокирование возможности использовать чат и ЛС на 15 минут;<br>
                        последующие нарушения - блокирование возможности использовать чат и ЛС на сутки.</p></li>
                <li><b>2.6.</b> Оскорбление других игроков без применения матерных слов, провокации на
                    оскорбление/мат, необоснованное публичное обвинение, использование оскорбительных
                    производных слов от имен персонажей, дезинформация.
                    <p class="punishment">Форма наказания:<br>
                        первое нарушение - предупреждение;<br>
                        второе нарушение - блокирование возможности использовать чат и ЛС на 30 минут;<br>
                        последующие нарушения - блокирование возможности использовать чат и ЛС на сутки.</p></li>
                <li><b>2.8.</b> Использование ненормативной лексики (как в чей-то адрес, так и безадресной),
                    сексуальные домогательства, использование завуалированных выражений (если они имеют двоякий
                    смысл и могут быть расценены, как вульгарные или нецензурные; замена букв в словах точками,
                    пробелами и прочими специальными символами (*, #, $, а также им подобными)), в том числе на
                    иностранных языках.
                    <p class="punishment">Форма наказания:<br>
                        первое нарушение - блокирование возможности использовать чат и ЛС на 30 минут
                        и принудительный выход Игрока с сервера;<br>
                        последующие нарушения - блокирование возможности использовать чат и ЛС на сутки
                        и принудительный выход Игрока с сервера.</p></li>
                <li><b>2.9.</b> Высказывания расистского или религиозного характера и попытки разжечь
                    межнациональную или религиозную рознь.
                    <p class="punishment">Форма наказания:<br>
                        первое нарушение - блокирование возможности использовать чат и ЛС на час
                        и принудительный выход Игрока с сервера;<br>
                        последующие нарушения - блокирование возможности использовать чат и ЛС на сутки
                        и принудительный выход Игрока с сервера.</p></li>
                <li><b>2.10.</b> Угрозы расправой в реальной жизни, публичное высказывание об уходе из игры,
                    обсуждение и реклама наркотических препаратов и алкогольной продукции (в реальной жизни), клевета.
                    <p class="punishment">Форма наказания:<br>
                        первое нарушение - блокирование возможности использовать чат и ЛС на сутки и
                        принудительный выход Игрока с сервера;<br>
                        второе нарушение - блокирование персонажа.</p></li>
                <li><b>2.11.</b> Открытый и целенаправленный троллинг Администрации или
                    Игроков.
                    <p><b>Троллинг</b> - провоцирование на конфликт под видом завуалированных сообщений,
                        содержащих двусмысленное значение или намекающих на таковые.</p>
                    <p class="punishment">Форма наказания:<br>
                        первое нарушение - предупреждение;<br>
                        последующие нарушения - блокирование возможности использовать чат и ЛС на сутки.</p></li>
                <li><b>2.12.</b> Выкладывать в чат рекламу других серверов без согласования с Администрацией сервера.
                    <p class="punishment">Форма наказания:<br>
                        первое нарушение - предупреждение;<br>
                        последующие нарушения - блокирование возможности использовать чат и ЛС на сутки.</p></li>
                <li><b>2.13.</b> Обсуждать или осуждать действия Администрации сервера по отношению к отдельно
                    взятым Игрокам или любых других действий администрации.
                    <p class="punishment">Форма наказания:<br>
                        первое нарушение - предупреждение;<br>
                        последующие нарушения - блокирование возможности использовать чат и ЛС на 30 минут.</p></li>
                <li><b>2.14.</b> Просить дать особые привилегии (полёт, бег, прохождение сквозь стены и т. д.).
                    <p class="punishment">Форма наказания: <br>
                        первое нарушение - предупреждение; <br>
                        последующие нарушения - блокирование возможности использовать чат и ЛС на 30 минут.</p></li>
                <li><b>2.15.</b> Просить изменить расу и пол более одного раза за существование персонажа.
                    <p class="punishment">Форма наказания:<br>
                        первое нарушение - предупреждение;<br>
                        последующие нарушения - блокирование возможности использовать чат и ЛС на 30 минут.</p></li>
                <li><b>2.16.</b> Просить Администрацию сервера найти труп, продать что-либо.
                    <p class="punishment">Форма наказания:<br>
                        первое нарушение - предупреждение; <br>
                        последующие нарушения - блокирование возможности использовать чат и ЛС на 30 минут.</p></li>
                <li><b>2.17.</b> Засорять почтовые ящики Администрации сервера или Игроков хламом (более 8
                    разных видов предметов в течении 2 часов).
                    <p class="punishment">Форма наказания:<br>
                        первое нарушение - предупреждение;<br>
                        второе нарушение - блокирование персонажа на сутки;<br>
                        третье нарушение - окончательное блокирование персонажа.</p></li>
                <li><b>2.18.</b> Пытаться обходить наказания путём создания нового персонажа.
                    <p class="punishment">Форма наказания:<br>
                        первое нарушение - окончательное блокирование персонажа; <br>
                        последующие нарушения - пожизненный бан.</p></li>
                <li><b>2.19.</b> Напоминать Администрации сервера о отсутствии пункта 2.7. в ПРАВИЛАХ сервера [RU] L.O.R.D. .
                    <p class="punishment">Форма наказания:<br>
                        первое нарушение - предупреждение;<br>
                        последующие нарушения - блокирование возможности использовать чат и ЛС на 2 часа 7 минут.</p></li>
            </ul>

            <h2>III. Права Администрации сервера:</h2>
            <ul class="media-list">
                <li><p><b>3.1.</b> Применять дисциплинарные меры на неопределённый срок в отношении нарушителей
                        настоящих правил.</p></li>
                <li><p><b>3.2.</b> Строить самим сооружения с применением особых привилегий.</p></li>
                <li><p><b>3.3.</b> Выдавать особые привилегии (полёт, бег, прохождение сквозь стены и т. д.), при
                        отсутствии возражений со стороны остальных Администраторов и Модераторов.</p></li>
                <li><p><b>3.4.</b> Устанавливать защитное поле areas отдельным Игрокам на определённые
                        сооружения, при отсутствии возражений со стороны остальных Администраторов и Модераторов.</p></li>
                <li><p><b>3.5.</b> Отступать от данных правил, руководствуясь собственным опытом.</p></li>
                <li><p><b>3.6.</b> Изменять ПРАВИЛА сервера [RU] L.O.R.D. .</p></li>
            </ul>
            <p>* Пункты 2.6., 2.8. - 2.11. ПРАВИЛ сервера [RU] L.O.R.D. относятся не только к чату, но и к
                личным сообщениям, табличкам, бумаге/книгам, объёмному тексту или сооружениям, похожим на текст.</p>
            <p>* При входе на сервер [RU] L.O.R.D. Вы соглашаетесь с вышеозначенными правилами, регулирующими
                деятельность как Администрации сервера, так и Игроков сервера [RU] L.O.R.D. .</p>
        </div>
    </div>
@endsection
