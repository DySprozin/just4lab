<?php

namespace shop;

require_once "YaMoneyCommonHttpProtocol.php";
require_once "Settings.php";

$settings = new Settings();
$yaMoneyCommonHttpProtocol = new YaMoneyCommonHttpProtocol("checkOrder", $settings);
//fwrite(fopen("test.log","a+"),print_r($_REQUEST,true));
$yaMoneyCommonHttpProtocol->processRequest($_REQUEST);
exit;
?>
