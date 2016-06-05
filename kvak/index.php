<?php
define ('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
include ROOT . 'conf/main_conf.php';

include ROOT . 'Cls/Cls_Kvak.php';
include ROOT . 'components/kvak/index.php';

include ROOT . 'inc/header_common.htm';


?>

<script type="text/javascript" src="/js/kvak.js"></script>
<br class="break">
<div class="kvak_head" <?php echo empty($align_topic) ? '' : $align_topic; ?>><?php echo empty($forum_top) ? '' : $forum_top; echo empty($kvak_pages) ? '&nbsp;' : $kvak_pages; ?></div>
<!--Список КВА -->

<table class="table_actual kva">
 <tr>
  <td class="border_left_top">
   <div class="actual_title" id="actual_title">
	<?php echo $kvak_title; ?>
   </div>
  </td>
  <td class="<?php echo $main_css; ?>_right_top">&nbsp;
  </td>
 </tr>
 <tr>
  <td class="<?php echo $main_css;?>_left">
   <hr>
   <div class="actual_body paper_body">

<?php eval($kvak_body); ?>
   </div>
  </td>
  
  <td class="<?php echo $main_css;?>_right">

<?php
 if ($main_css == "border") {
  echo $f[30]->kvak();
  echo $f[11]->kvak();
 }
?>

  </td>
 </tr>
 <tr>
  <td class="border_left_bottom">
   &nbsp;
  </td>
  <td class="<?php echo $main_css; ?>_right_bottom">&nbsp;
  </td>
 </tr>
</table>

<div class="footer_ie">&nbsp;</div>
<?php if (isset($footer_kva)) echo $footer_kva; ?>
<!-- footer -->
<?php include ROOT . 'inc/footer_common.htm'; ?>
