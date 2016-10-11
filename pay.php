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
   </div>
  </td>
  <td class="paper_right_top">&nbsp;
  </td>
 </tr>
 <tr>
  <td class="paper_left">
   <div class="actual_body paper_body">

<form method="POST" action="https://money.yandex.ru/eshop.xml">

<input type="hidden" name="shopId" value="64014">
<input type="hidden" name="scid" value="69969">
Введите ваше имя/фамилию:
<input type=text name="custName" value=""><br><br> 
Введите ваш Email и/или телефон (обязательно, иначе, мы с Вами не сможем связаться):<br>
<input type=text name="customerNumber" size="64" value=""><br><br> 
Количество товара:
<input type=text name="orderDetails" value="<?php echo $_GET['count']; ?>"><br><br> 
Итого, сумма (руб.):<br> 
<?php
if ($_GET['count'] >=10) $_GET['price'] = $_GET['price']*0.90;
?>
<input type=text name="sum" size="64" value="<?php echo $_GET['price'] * $_GET['count']; ?>" readonly="readonly"><br><br>

<!-- customerNumber -- до 64 символов; идентификатор плательщика в ИС Контрагента.
В качестве идентификатора может использоваться номер договора плательщика, логин плательщика и т.п.
Возможна повторная оплата по одному и тому же идентификатору плательщика.

sum -- сумма заказа в рублях.
-->

<!-- необязательные поля (все параметры яндекс.кассы регистрозависимые) -->   
<!--input name="orderNumber" value="order77" type="hidden"/--> 
<input name="cps_phone" value="79161220945" type="hidden"/> 
<input name="cps_email" value="manager@4lab.su" type="hidden"/>

<br>
<input name="paymentType" value="" type="hidden"  />
<br>
<input type=submit value="Оплатить"><br> 



<br>

</form>
   </div>
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












