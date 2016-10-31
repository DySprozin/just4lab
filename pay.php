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

   
<?php



 if (isset($_GET['order']) && empty($_GET['order'])) {

?>

<form method="get" action="pay.php">

Введите ваше имя/фамилию:<br>
<input type=text name="custName" value="" style="width:300px"><br><br> 
Введите ваш Email и/или телефон (обязательно, иначе, мы с Вами не сможем связаться):<br>
<input type=text name="customerNumber" size="64" value="" style="width:300px"><br><br> 
Введите номер счета:<br>
<input type=text name="order" value="" style="width:300px"><br><br> 

<input type=submit value="Перейти к оплате"><br> 


<br>

</form>

<?php
 }
 elseif (!empty($_GET['order'])) {
	 
 $link = mysql_query("SELECT * FROM orders WHERE number='" . mysql_real_escape_string(strtoupper($_GET['order'])) . "';") or errDB();
 $isorder = mysql_fetch_assoc($link);
 if (empty($isorder['number'])) echo 'Такого счета не существует, <a href="/pay.php?order" style="color:green">попробуйте еще раз</a>';
 else {
	 
?>

Проверьте данные: <br><br>
<form method="POST" action="https://money.yandex.ru/eshop.xml">

<input type="hidden" name="shopId" value="64014">
<input type="hidden" name="scid" value="69969">
Имя/фамилия: <?php echo $_GET['custName'];?><br>
<input type="hidden" name="custName" value="<?php echo $_GET['custName'];?>"><br>
Email и/или телефон: <?php echo $_GET['customerNumber'];?><br>
<input type="hidden" name="customerNumber" size="64" value="<?php echo $_GET['customerNumber'];?>" style="width:300px"><br> 
<input type="hidden" name="orderDetails" value="<?php echo "Счет № " . $_GET['order']; ?>" style="width:300px">
Итого, сумма (руб.): <?php echo $isorder['price']; ?>
<input type="hidden" style="width:300px" name="sum" size="64" value="<?php echo $isorder['price']; ?>" readonly="readonly">

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
<?php
 }
 }
 else {
?>





<form method="POST" action="https://money.yandex.ru/eshop.xml">

<input type="hidden" name="shopId" value="64014">
<input type="hidden" name="scid" value="69969">
Введите ваше имя/фамилию:<br>
<input type=text name="custName" value="" style="width:300px"><br><br> 
Введите ваш Email и/или телефон (обязательно, иначе, мы с Вами не сможем связаться):<br>
<input type=text name="customerNumber" size="64" value="" style="width:300px"><br><br> 
Количество товара:<br>
<input type=text name="orderDetails" value="<?php echo $_GET['count']; ?>" style="width:300px"><br><br> 
Итого, сумма (руб.):<br> 
<input type=text style="width:300px" name="sum" size="64" value="<?php echo $_GET['price'] * $_GET['count']; ?>" readonly="readonly"><br><br>

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
<?php
}
?>
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












