<?php
define ('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
if (strpos($_SERVER['REQUEST_URI'], "shop")) $is_shop = true;

include ROOT . 'conf/main_conf.php';

include ROOT . 'Cls/Cls_Topic.php';

if ($is_shop == true) include ROOT . 'components/topic/shop_index.php';
else include ROOT . 'components/topic/index.php';

include ROOT . 'inc/header_common.htm';


?>

<script type="text/javascript" src="/js/topic.js"></script>
<br class="break">
<div class="topic_head" <?php echo empty($align_topic) ? '' : $align_topic; ?>><?php echo empty($forum_top) ? '' : $forum_top; echo empty($topic_pages) ? '&nbsp;' : $topic_pages; ?></div>
<!--Список КВА -->

<table class="table_actual">
 <tr>
  <td class="border_left_top">
   <div class="actual_title" id="actual_title">
	<?php 
	 if ($is_shop)
	  echo '<div style="float:left">'.$topic_title . '</div>' . '<div style="float:right"><a href="/pay.php?order" style="color:green">Оплатить счет</a>&nbsp;</div>'; 
	 else echo $topic_title;
	?>
   </div>
  </td>
  <?php if (!$is_shop) echo '<td class=" '.$main_css.'_right_top" style="width:1px">&nbsp;</td>'; ?>
 </tr>
 <tr>
  <td class="<?php echo $main_css;?>_left">
   <hr>
   <div class="actual_body paper_body">

<?php eval($topic_body); ?>
   </div>
  </td>
<?php  
if (!$is_shop) {
  echo '<td class="'.$main_css.'_right">';
 
 
 if ($main_css == "border") {
  if (strpbrk($f[30]->get_chmods(), 'ED')) echo $f[30]->topic();
  echo $f[31]->topic();
  echo $f[11]->topic();
 }
 echo '</td>';
 }
?>

  
 </tr>
 <tr>
  <td class="border_left_bottom">
   &nbsp;
  </td>
<?php  if (!$is_shop) '<td class="'.$main_css.'_right_bottom">&nbsp;</td>'; ?>
 </tr>
</table>

<div class="footer_ie">&nbsp;</div>
<?php if (isset($footer_kva)) echo $footer_kva; ?>
<!-- footer -->
<?php include ROOT . 'inc/footer_common.htm'; ?>
