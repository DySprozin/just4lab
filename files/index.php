<?php
define ('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
include ROOT . 'conf/main_conf.php';

include ROOT . 'Cls/Cls_files.php';

include ROOT . 'inc/header_common.htm';

$list_all = new Cls_files;
$list_all->startlist();
?>

<script type="text/javascript" src="/js/flask.js?c=09091"></script>

<div id="list_all" class="list_all">
<?php
echo $list_all->startlist;
?>
<br>
<script type="text/javascript">
 document.write('<div style="text-align:center;"><a href="./?js_flask_on" style="color:red;">Вернуть колбы обратно!</a></div>');
</script> 
<br>
<br>
<br>


<div class="footer_ie">&nbsp;</div>


</div>

<div style="z-index: 2; position: relative; left: 4%; width: 96%;" id="flasks" class="flasks"></div>
<div class="flasks">
 <div style="position: relative; z-index:1;">
 <table class="red_button">
  <tr style="margin:0px; padding:0px;">
   <td colspan="3" class="red_button_01">&nbsp;</td>
    
  </tr>
  <tr>
   <td rowspan="2" class="red_button_02">&nbsp;</td>
   <td class="red_button_03"  onmouseout="">
    <a href="./?js_flask_off=1">
     <div title="Все файлы одним списком" style="width:171px; height:63px; background-image:url('/files/img/red_button/red_button_03.gif');" onmouseover="this.style.backgroundImage='url(/files/img/red_button/red_button_03_on.gif)';" onmouseout="this.style.backgroundImage='url(/files/img/red_button/red_button_03.gif)';">
      &nbsp;
     </div>
    </a>
   </td>
   <td rowspan="2" class="red_button_04">&nbsp;</td>
  </tr>
  <tr>
   <td class="red_button_05">&nbsp;</td>
  </tr>
 </table>
</div>
</div>

<div style="position: absolute; top:-5000px; font-size:14pt; width:100%;z-index:5; height:0px;">
<div class="box" onmouseover="flask_o = false;" onmouseout="flask_o = true; flask_out(flask_t);">
<div style="width:15px; height:15px; float:right; cursor:pointer;" onclick = "flask0()"><img alt="X" src="img/exit.gif"></div>
<div class="box2"></div>
</div>
</div>



<!-- footer -->
<?php include ROOT . 'inc/footer_common.htm';