<?php

fwrite(fopen("test123.log","a+"),"##########################\r\n" . print_r($_POST,true));

if ($_POST[action]=="checkOrder") include "checkOrder.php";
if ($_POST[action]=="paymentAviso") include "paymentAviso.php";
 


