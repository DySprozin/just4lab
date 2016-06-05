<?php
define ('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
include ROOT . 'conf/main_conf.php';

include ROOT . 'inc/header_common.htm';
?>

<script type="text/javascript" src="/js/lab.js"></script>


<br class="break0">

<table class="table_actual">
 <tr>
  <td class="border_left_top">
   <!--div class="actual_title">
    Актуально
   </div-->
  </td>
  <td class="border_right_top">&nbsp;
  </td>
 </tr>
 <tr>
  <td class="border_left">
   <!--hr-->
<!--Список новостей ("актуально!")-->
<?php include ROOT . 'components/main/actual.php'; ?>
  </td>
  <td class="border_right">
  <!--img src="/img/positive.gif" alt="Позитивые новости" class="img_right_menu">
  <div class="border_right_menu" style="padding-top: 0px;">
   <a class="border_right_link" href="#/news/"  style="color: gray;" onclick="alert('В разработке, скоро появится ;)');">Новости мира<br>
   от  01.09.2012</a>
  </div>
  <br class="break"-->

  <img src="/img/sci-hub.gif" alt="Бесплатные научные статьи" class="img_right_menu">
  <div class="border_right_menu" style="padding-top: 0px;">
   <a target="_blank" class="border_right_link" href="http://sci-hub.cc/">Sci-Hub: сервис доступа<br> к научной литературе</a>
  </div>
  <br class="break">
  <img src="/img/libgen.gif" alt="Бесплатные научные статьи" class="img_right_menu">
  <div class="border_right_menu" style="padding-top: 0px;">
   <a target="_blank" class="border_right_link" href="http://libgen.io/">Поиск и скачивание научных статей и книг</a>
  </div>
  <br class="break">
  <img src="/img/bug.gif" alt="Единственный баг на сайте" title="Единственный баг на сайте" class="img_right_menu">
  <div class="border_right_menu">
   <a class="border_right_link" href="/forhack.php">Кулхацкерам</a><br>
  </div>
  <br class="break">

  <div style="margin-left:-20%;"><hr style="width:90%;"><div align="center">Последние комментарии:</div><hr style="width:90%;"><br><?php include ROOT . 'components/main/Comments.php'; ?></div>
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
