<?php
define ('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
include ROOT . 'conf/main_conf.php';

include ROOT . 'inc/header_common.htm';
?>




<br class="break0">

<table class="table_actual">
 <tr>
  <td class="border_left_top">
   <div class="actual_title">
     Заправка струйного принтера на коленке
   </div>
  </td>
  <td class="border_right_top">&nbsp;
  </td>
 </tr>
 <tr>
  <td class="paper_left">
   <hr>
   <div class="actual_body paper_body">
<br>
<b>1. Предисловие...</b>
<p>
...С развитием высоких технологий стремительно умирает прогноз о&nbsp;том, что компьютеры уменьшат, а&nbsp;под конец совсем сведут на&nbsp;нет использование бумаги. Ведь, благодаря интернету, электронные книги и&nbsp;документы можно передавать практически мгновенно. А&nbsp;есть еще диски, флешки, дискеты (дискеты? кто-нибудь еще помнит, что это такое?) И&nbsp;что&nbsp;же? Несмотря ни&nbsp;на&nbsp;что, объем потребляемой бумаги не&nbsp;только не&nbsp;уменьшился, но&nbsp;и&nbsp;в&nbsp;разы увеличился! И, как следствие, у&nbsp;современного человека по&nbsp;крайней мере две мечты: безлимитный интернет&nbsp;и... безлимитный принтер.
</p>
<br>
<b>2. Почти безлимитный принтер</b>
<p class="epi">
...&laquo;почти вечное&raquo; значит, в&nbsp;сущности, невечное.<br>
Но&nbsp;для практической жизни это не&nbsp;так...<br>
<i>Я.&nbsp;И.&nbsp;Перельман.</i>
</p>

<p>
Что значит: безлимитный принтер? Это значит много краски. Очень много краски. Штук 15&nbsp;картриджей на&nbsp;месяц должно хватить. Только стоить это удовольствие будет <span class="nobr">10&ndash;15</span> тысяч рублей. Мде... это вам не&nbsp;безлимитный интернет за&nbsp;600&nbsp;рублей. А&nbsp;что, если я&nbsp;предложу, от&nbsp;15000 убрать пару нулей? Да, это реально! Можно, имея картридж (желательно не&nbsp;засохший), заплатить всего 150 рублей за&nbsp;три шприца по&nbsp;20&nbsp;мл чернил и&nbsp;самостоятельно осуществлять заправку (картридж вмещает обычно <span class="nobr">3&ndash;4 мл).</span>
</p>
<br>
<b>3. Альтернативное мнение и&nbsp;немного теории</b>
<p class="epi">Практика без теории слепа, а&nbsp;теория без практики мертва.<br>
<i>К.&nbsp;Маркс.</i>
</p>
<p>
Сначала, позволю себе привести цитату из&nbsp;журнала &laquo;][акер&raquo; (выделено мной).
</p>
<div class="quote">
<a class="a" rel="nofollow" target="_blank" href="http://www.xakep.ru/magazine/xa/095/028/2.asp"></a>
</div>
<div class="quoting">
<p>Сэкономить&nbsp;и, не&nbsp;покупая новый картридж, просто залить в&nbsp;него новые чернила&nbsp;&mdash; по&nbsp;первым ощущениям хорошая идея. В&nbsp;самом деле, зачем покупать новый картридж, если можно в&nbsp;любом магазине купить баклажку чернил, шприц в&nbsp;аптеке и&nbsp;заправлять свой картридж, сколько влезет?</p>
<p> Ответ тут очень простой. Дело в&nbsp;том, что при производстве картриджей используется сложное высокотехнологичное оборудование и&nbsp;специальные, почти стерильные, помещения. При использовании пьезоэлектрической технологии довольно дорогая печатающая головка очень чувствительна к&nbsp;любой пыли, грязи и&nbsp;даже мельчайшим частицам. Не&nbsp;говоря уже о&nbsp;качестве чернил: совершенно понятно, что на&nbsp;заводе Epson их&nbsp;подбирают специальным образом, чтобы они на&nbsp;100% подходили к&nbsp;печатающей головке.</p>
<p> Заправляя в&nbsp;кустарных условиях шприцем свой картридж, ты&nbsp;вводишь в&nbsp;него огромное количество чужеродных частиц, которые сразу&nbsp;же ухудшают качество печати и&nbsp;портят головку. <b>Так что на&nbsp;деле экономия может обернуться убытками</b>&nbsp;&mdash; ты&nbsp;просто запорешь печатную головку некачественными чернилами, и&nbsp;придется уже не&nbsp;менять картридж, а&nbsp;ремонтировать принтер. </p>
</div>
<p>
Статья, из&nbsp;которой взята эта цитата, писалась в&nbsp;2006&nbsp;году. Тогда еще Epson был одним из&nbsp;немногих принтеров со&nbsp;стационарной (встроенной в&nbsp;сам принтер) печатающей головкой. У&nbsp;других принтеров печатающая головка интегрирована в&nbsp;картридж. Качество печати несколько уступает, однако, и&nbsp;надежность выше: замена самой чувствительная части принтера решается простой покупкой нового картриджа. Сейчас ситуация кардинально поменялась, и&nbsp;многие струйные принтеры перешли на&nbsp;встроенную печатающую головку порча которой фатальна для всего устройства.
</p>
<p>
Таким образом, стоит сначала узнать тип вашего принтера. Это легко сделать по&nbsp;внешнему виду картриджа:
</p>

<div class="bg_kar">
<b>Epson (слева):</b> картридж без печатающей головки<br>
(она встроена в&nbsp;принтер), заправлять рискованно;<br>
<b>Lexmark (справа):</b> картридж с&nbsp;печатающей головкой.
</div>
<br>
<b>4. Инструменты</b>
<p>
Итак, вы&nbsp;определили, что печатающая головка встроена в&nbsp;картридж, а&nbsp;не&nbsp;в&nbsp;принтер и&nbsp;в&nbsp;худшем случае на&nbsp;помойку полетит именно сам картридж, который в&nbsp;общем-то не&nbsp;жалко&nbsp;&mdash; вы&nbsp;все равно собирались покупать новый. Что нам понадобится:<br>
</p>
<ul>
<li> буравчик (можно обойтись и&nbsp;загнутым гвоздем&nbsp;&mdash; пластик достаточно мягок);
<li> шприц с&nbsp;черными чернилами вашей марки принтера;
<li> газета (чтобы стол не&nbsp;испачкать);
<li> вата/салфетка
</ul>
<p> Другая атрибутика (перчатки, халат, огнеупорные очки, резиновые сапоги) подбираются по&nbsp;вкусу.</p>
<br>
<b>5. Приступим</b>
<p class="epi">
&mdash;&nbsp;Больной будет ходить?<br>
&mdash;&nbsp;Будет. Но&nbsp;только под себя.<br>
<i>Анекдот</i>
</p>
<p>
Как правило, картридж надо сверлить. Но&nbsp;не&nbsp;всегда. Не&nbsp;помешает проверить: может, необходимые отверстия уже имеются и&nbsp;просто закрыты наклейкой? Нет? Тогда берем буравчик и&nbsp;в&nbsp;районе центра картриджа начинаем вращательные движения&nbsp;&mdash; до&nbsp;тех пор, пока не&nbsp;появится дырка. В&nbsp;процессе сверления желательно сдувать образующуюся стружку&nbsp;&mdash; если она попадет внутрь картриджа, печатающей способности это не&nbsp;прибавит.
</p>
<p>
Справились? Отлично! Теперь опустите иглу в&nbsp;картридж (осторожно, у&nbsp;него на&nbsp;дне фильтр&nbsp;&mdash; не&nbsp;повредите его!) и&nbsp;аккуратно, буквально по&nbsp;миллилитру в&nbsp;<span class="nobr">2&ndash;3 секунды,</span> начинайте впрыскивать чернила (для начала не&nbsp;более 3&nbsp;мл, а&nbsp;вообще, читайте инструкцию&nbsp;&mdash; она обыно прилагается к&nbsp;шприцам с&nbsp;краской). Когда их&nbsp;уровень достигнет нужного, вытащите шприц.
</p>
<p>
Картридж поставьте на&nbsp;салфетку на&nbsp;пару минут. Потом осторожно протрите его ватой и&nbsp;подержите некоторое время (секунд&nbsp;30) просверленным отверстием вверх. Если внизу картриджа не&nbsp;собирается капель, значит можно его вставлять в&nbsp;принтер. В&nbsp;противном случае, надо дать картриджу постоять на&nbsp;салфетке еще <span class="nobr">5&ndash;6 минут.</span> Если проблема осталась, попробуйте заткнуть отверстие. Идеально подойдет для этого кончик зубочистки.
Если картридж на&nbsp;салфетке вообще не&nbsp;оставляет черных пятен, значит, он&nbsp;высох и&nbsp;нуждается в&nbsp;реанимации.
</p>
<br>
<b>6. Реанимация высохших картриджей</b>
<p>
Реанимация&nbsp;&mdash; она на&nbsp;то&nbsp;и&nbsp;реанимация&nbsp;&mdash; в&nbsp;критических ситуациях спасает жизнь (пусть даже картриджей), но&nbsp;при этом ничего не&nbsp;гарантирует. Сложите салфетку в&nbsp;несколько раз, намочите ее&nbsp;и&nbsp;поставьте на&nbsp;нее картридж (учтите, что в&nbsp;случае удачи, просочиться краска может очень быстро). Через 30&nbsp;минут картридж можно снимать. Осторожно протрите его сухой салфеткой и&nbsp;проверьте работоспособность.
</p>

<br>
<b>7. Экономить&nbsp;&mdash; так по-полной! СНПЧ</b> (глава добавлена <a target="_blank" href="http://fantom.kz">astass&rsquo;ом</a>)
<p><i>От&nbsp;редактора.</i> Для тех, кто не&nbsp;знает: СНПЧ расшифровывается как система непрерывной подачи чернил. Но&nbsp;передаю слово автору главы&nbsp;&mdash; astass&rsquo;у.</p>
<p>
<i>Astass.</i> Всем известно, что принтеры очень дорогие по&nbsp;картриджам. Иногда цена <span class="nobr">2-х</span> картриджей = <span class="nobr">1-му</span> принтеру (здесь я&nbsp;не&nbsp;беру дорогие модели). Сев и&nbsp;посчитав все хорошенько, пришел к&nbsp;выводу, что это безобразие. Купил себе СНПЧ (иногда называют БСМПЧ) Установил на&nbsp;свой Epson&nbsp;и... получил домашнюю типографию. Печатай хоть фото, хоть на&nbsp;дисках (принтэйбл), в&nbsp;общем остался доволен. Правда замечу, что в&nbsp;моем принтере 6&nbsp;цветных емкостей (в&nbsp;моделях ранее стоят обычно&nbsp;3, но&nbsp;и&nbsp;с&nbsp;<span class="nobr">3-мя</span> картриджами можно сделать эту вещь).
</p>
<p>
Мне говорили что эта система убивает принтер. Враки! Пока она его убьет я&nbsp;столько раз сам принтер оправдаю, что и&nbsp;не&nbsp;жалко. И&nbsp;потом, сколько стоят эти штуки у&nbsp;друзей и&nbsp;знакомых, еще ни&nbsp;кто не&nbsp;плакался мне в&nbsp;жилетку насчет того, что принтер сломался. Да&nbsp;и&nbsp;сломается, считай, что ты&nbsp;спас дерево! ;-)
</p>

<table class="table_img_noc">
<tr>
<td>
<img alt="" src="/paper/img/snpch-1.jpg">
</td>
<td>
<img alt="" src="/paper/img/snpch-2.jpg">
</td>
</tr>
</table>

<p>
На&nbsp;фото, собственно, все видно. Главное краска не&nbsp;<span class="nobr">10&ndash;20 ml.</span> Одной заправки хватает на&nbsp;год, система без сбоев пашет уже 2&nbsp;года.
</p>
<p><i>От&nbsp;редактора.</i> Вот только у&nbsp;меня Lexmark: под такой принтер наверно СНПЧ нету? Там печатающая головка встроена в&nbsp;картридж.
</p>
<p>
<i>Astass.</i> А&nbsp;вот и&nbsp;ошибаешься еще как есть :-) Только данная система крепиться прям на&nbsp;твой картридж (сверлится отверстие и&nbsp;ставиться такая&nbsp;же как у&nbsp;меня гибкая трубка). У&nbsp;друга Hewlett, а&nbsp;там тоже головка в&nbsp;картридже. Один раз засверлился&nbsp;и, вуаля, картридж стал емкостью! Вот только не&nbsp;знаю, есть там кнопка сброса или нет. По&nbsp;крайней мере, в&nbsp;инете, если сгуглить, можно найти на&nbsp;какие модели она есть. Точно есть на&nbsp;Epson, Hewlett и&nbsp;Canon. На&nbsp;Lexmark не&nbsp;слышал, но&nbsp;знаю, что в&nbsp;России выпускают универсальный СНПЧ, который на&nbsp;очень многие модели ставиться.
</p>
<p>
Пусть не&nbsp;подумают, что я&nbsp;гадкий спамер, но&nbsp;вот: <a href="http://www.resetters.ru/" class="a" target="_blank" rel="nofollow"></a>. Это, кажется, самый крутой и&nbsp;самый полный ресурс на&nbsp;тему СНПЧ&nbsp;&mdash; там можно найти практически все и&nbsp;гугл хоть от&nbsp;поисков отдохнет ;-)
</p>
<br>
<b>Заключение</b>
<p>
Я&nbsp;писал эту статью из&nbsp;расчета, что сегодня струйные принтеры достаточно дешевы, и&nbsp;если картридж зальет печатающее устройство, это не&nbsp;будет большой потерей. С&nbsp;одной стороны, жадный платит дважды. С&nbsp;другой... кто не&nbsp;рискует, тот не&nbsp;пьет шампанского.
</p>
<p>
Также, я&nbsp;ничего не&nbsp;сказал о&nbsp;цветных картриджах. Просто они не&nbsp;так быстро кончаются&nbsp;и (самое главное) очень редко их&nbsp;заправка приводит к&nbsp;чему-то хорошему&nbsp;&mdash; ведь&nbsp;им, в&nbsp;отличие от&nbsp;черных картриджей, приходится передавать цвет, когда любой изъян (зеленоватое лицо, например) бросается в&nbsp;глаза. Тем не&nbsp;менее, <a target="_blank" rel="nofollow" href="http://www.wasp.kz/articles.php?article_id=177&amp;rowstart=1">вы&nbsp;можете попробовать</a>.
</p>
<br>
<b>P.&nbsp;S.&nbsp;Планы на&nbsp;будущее</b>
<p>
Хм, безлимитная краска у&nbsp;меня есть. Теперь где&nbsp;бы разжиться безлимитной бумагой?..
</p>
<br>
&copy;&nbsp;Д.&nbsp;И.&nbsp;Спрозин, <i>2008&nbsp;год</i>.<br>
&copy;&nbsp;Astass, <i>2010&nbsp;год</i>.<br>

<hr>
Полезные ссылки:
<ul class="nomarg">
<li> <a target="_blank" rel="nofollow" href="http://www.xakep.ru/magazine/xa/095/028/1.asp">Статья о&nbsp;вреде заправки картриджей Epson</a><br>
<li> <a target="_blank" rel="nofollow" href="http://www.wasp.kz/articles.php?article_id=131">Любопытная статейка о&nbsp;реанимации картриджа</a> с&nbsp;его вскрытием.
</ul>
   </div>
  <!-- comment form -->
  <?php include ROOT . 'inc/comment_paper.htm'; ?>
  <script type="text/javascript" src="/js/paper.js"></script>
  </td>
  <td class="paper_right">
&nbsp;
  </td>
 </tr>
 <tr>
  <td class="border_left_bottom">
   &nbsp;
  </td>
  <td class="border_right_bottom">&nbsp;
  </td>
 </tr>
</table>
<div class="footer_ie">&nbsp;</div>
<!-- footer -->
<?php include ROOT . 'inc/footer_common.htm'; ?>











