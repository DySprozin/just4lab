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
    Статьи:
   </div>
  </td>
  <td class="border_right_top">&nbsp;
  </td>
 </tr>
 <tr>
  <td class="border_left">
   <hr>
<!--Список новостей ("актуально!")-->
<?php include ROOT . 'components/main/actual.php'; ?>
   <div class="actual_body paper_body">
   <ul>
<li class="link"><a href="/paper/21/117">Полезные ссылки</a><br><br>
<li class="study">Учебные статьи
 <ul>
  <li><a href="/paper/21/165">Пахт: о поршневых и плунжерных насосах</a>, или как не учить картинки
  <li><a href="/paper/21/170">Пахт: о поршневых и плунжерных насосах:</a> велосипедный насос
  <li><a href="/paper/30/649">Пахт: о центробежных насосах</a>, или как не учить картинки
  <li><a href="/paper/30/638">Как расставлять ссылки в литобзоре</a> при помощи Word 2007
  <li><a href="/paper/30/640">Mendeley — быстрый старт студентам</a> и молодым ученым
  <li><a href="/paper/30/642">Оформление Excel-графиков.</a> Выпавшие точки.
</ul>
<br>
<li class="law">Закон, учеба, жизнь
 <ul>
  <li><a href="/paper/1/401">Аспирантура в РХТУ:</a> миф или кривые руки?
  <li><a href="/paper/1/1">ПСЖ, академ, отчисление:</a> кратко о главном
 </ul>
<br>
<li class="lab">В наших лабораториях...
 <ul>
  <li><a href="/paper/25/547">К вопросу о точности тест-систем</a> для определения NH<span class="sub1">3</span> / NH<span class="sub1">4</span><span class="sup2">+</span>
  <li><a href="/paper/25/601">Самодельная магнитная мешалка</a>. Часть 1 (теоретическая)
  <li><a href="/paper/25/602">Самодельная магнитная мешалка</a>. Часть 2 (практическая)
  <li><a href="/paper/30/643">Где все купить?</a>
 </ul>
<br>
<li class="freetime">Досуг
 <ul>
  <li><a href="/paper/18/95">&laquo;Нашествие&raquo;:</a> Как отдыхать, чего нельзя и как превратить &laquo;нельзя&raquo; в &laquo;можно&raquo;
  <li><a href="/paper/18/595">&laquo;Нашествие&raquo;, часть 2:</a> что брать и&nbsp;что надевать
 </ul>
<br>
<li class="comp">Компьютер
 <ul>
  <li><a href="/paper/2/2">Заправка струйного принтера на&nbsp;коленке</a>
 </ul>
<br>
<li class="comp">Научные статьи
 <ul>
  <li><a href="/paper/Microwave%20regenaration.pdf">Семенищева Е. Л., Старостин К. Г., Клушин В. Н. &laquo;Регенерация гранулированного активного угля, насыщенного парами бутанола, микроволновым излучением&raquo;</a>
 </ul>
<br>
<li class="serios">Не в шутку, не всерьез
 <ul>
  <li><a href="/paper/3/136">ЖПНР</a>
  <li><a href="/paper/3/316">ЖПНРОЗ</a>
  <li><a href="/paper/3/5">Менделееву таблица не снилась...</a>
  <li><a href="/paper/3/236">Место исполнения желаний в РХТУ</a>
  <li><a href="/paper/3/6">Что такое спин?</a>
 </ul>
<br>
<li class="news">Новости университета
 <ul>
  <li><a href="/paper/4/398">Студенты и перепись населения</a> &mdash; кто виноват и чем это пахнет?
  <li><a href="/paper/4/7">&laquo;Чао, сигарета&raquo;</a> &mdash; поддержка наркомана или&nbsp;наркоторговца?
 </ul>
<br>
<li class="tips">Советы студентам
 <ul class="tips">
  <li><a href="/paper/8/13">Советы первокурам</a>
 </ul>
   </div>
  </td>
  <td class="border_right">
  <img src="/img/bug.gif" alt="Единственный баг на сайте" title="Единственный баг на сайте" class="img_right_menu">
  <div class="border_right_menu2line">
   <a class="border_right_link" href="/forhack.php">Кулхацкерам<br>посвещается...</a><br>
  </div>
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