<html><head><title>Пример платежной формы. Платежное решение от Яндекс.Кассы</title><meta charset="UTF-8"></head>

<body>
<!-- Пример в кодировке UTF-8 (обязательно используйте именно эту кодировку для взаимодействия с Яндекс.Кассой)
Внимание! Это только пример. Для того, чтобы он работал, обязательно пропишите в нем shopId и scid, который мы присылаем в письме на ваш контактный e-mail.
Кроме того вам надо реализовать программную часть для CheckOrderURL и AvisoURL.
-->
<form method="POST" action="https://demomoney.yandex.ru/eshop.xml">
<!-- Если у вас боевой режим платежей, то замените action="https://money.yandex.ru/eshop.xml" -->

<!-- ОБЯЗАТЕЛЬНАНЫЕ ПОЛЯ (все параметры яндекс.кассы регистрозависимые) -->
<input type="hidden" name="shopId" value="64014">
<input type="hidden" name="scid" value="541865">
Идентификатор клиента:<br>
<input type=text name="customerNumber" size="64" value="Гость-12345"><br><br> 
Сумма (руб.):<br> 
<input type=text name="sum" size="64" value="10"><br><br>

<!-- customerNumber -- до 64 символов; идентификатор плательщика в ИС Контрагента.
В качестве идентификатора может использоваться номер договора плательщика, логин плательщика и т.п.
Возможна повторная оплата по одному и тому же идентификатору плательщика.

sum -- сумма заказа в рублях.
-->

<!-- необязательные поля (все параметры яндекс.кассы регистрозависимые) -->   
<input name="orderNumber" value="order777" type="hidden"/> 
<input name="cps_phone" value="79110000000" type="hidden"/> 
<input name="cps_email" value="manager@4lab.su" type="hidden"/>

<!-- Внимание! Для тестирования в ДЕМО-среде доступны только два метода оплаты: тестовый Яндекс.Кошелек и Тестовая банковская карта
-->
Умный платеж, рекомендуемый яндекс.кассой (когда вы передаете paymentType с пустым значением):
<br>
<input name="paymentType" value="" type="radio" checked="checked" />Выбор платежного метода на стороне Яндекс.Кассы "Умный платеж"
<br>
<input type=submit value="Оплатить"><br> 
<hr>
Стандартный платеж (paymentType передается с указанием конкретного метода)<br/>
<input name="paymentType" value="AC" type="radio" />С банковской карты<br/>
<input name="paymentType" value="PC" type="radio" />Со счета в Яндекс.Деньгах (яндекс кошелек)<br/>

<!--
Если подключен метод repeatCardPayment, то в платежную форму можно добавить
<input name="rebillingOn" value="true" type="hidden"/> 
-->

<!--
Ниже перечислены доступные формы оплаты.
Перечисленные методы оплаты могут быть доступны в боевой среде после подписания Договора.
Какие именно методы доступны для вашего Договора, вы можете уточнить у своего персонального менеджера.

AB - Альфа-Клик 
AC - банковская карта
GP - наличные через терминал
MA - MasterPass
MC - мобильная коммерция
PB  -интернет-банк Промсвязьбанка
PC - кошелек Яндекс.Денег
SB - Сбербанк Онлайн
WM - кошелек WebMoney
WQ - Qiwi
QP - Куппи.ру
KV - КупиВкредит

<input name="paymentType" value="GP" type="radio">Оплата по коду через терминал<br>
<input name="paymentType" value="WM" type="radio">Оплата cо счета WebMoney<br>
<input name="paymentType" value="AB" type="radio">Оплата через Альфа-Клик<br>
<input name="paymentType" value="PB" type="radio">Оплата через Промсвязьбанк<br>
<input name="paymentType" value="MA" type="radio">Оплата через MasterPass<br>
<input name="paymentType" value="QW" type="radio">Оплата через Qiwi<br>
<input name="paymentType" value="QP" type="radio">Куппи.ру<br>
<input name="paymentType" value="KV" type="radio">КупиВкредит<br>

Перечисление всех методов оплаты https://tech.yandex.ru/money/doc/payment-solution/reference/payment-type-codes-docpage/
-->

<br>
<input type=submit value="Оплатить"><br> 
</form>
<hr />
Документация: <a href="https://money.yandex.ru/doc.xml?id=526537">https://money.yandex.ru/doc.xml?id=526537</a>

<!-- Тестовые платежи

# Тестирование
 
Как только вы настроите свой сайт для тестирования, выполните тестовый платеж кошельком или тестовой картой (это самый простой тест и его достаточно, чтобы проверить корректность работы):
* при оплате выберите "Карточный платеж" (paymentType=AC)
* тестовая карта: 4444 4444 4444 4448, cvv 000 (действует до: любая дата в будущем; Имя и фамилия владельца: любое имя латинскими символами)

если не получилось картой (метод может быть вам не подключен), проверьте кошельком.

Обязательно сделайте себе свой тестовый кошелек, это можно сделать за 1 минуту. Пройдите по ссылке https://demomoney.yandex.ru/reg/ (важный момент: вы сможете сделать себе быстро тестовый кошелек, если у вас уже есть учетная запись в яндекс; если ее нет, то ее надо сделать, чтобы затем получить персональный тестовый кошелек).

-->

<!--
Примеры на GitHub
старый вариант https://github.com/YandexMoney/yandexmoney/tree/master/Yandex.Kassa/example%20integration/php
новый вариант https://github.com/yandex-money/yandex-money-kassa-example

Пример ответа на POST запрос к CheckURL
<?xml version="1.0" encoding="utf-8"?>
<checkOrderResponse performedDatetime="2015-06-23T08:59:16+03:00" code="0" invoiceId="1234567" shopId="100500" />

Пример ответа на paymentAviso при успехе обработки:
<?xml version="1.0" encoding="UTF-8"?> 
<paymentAvisoResponse performedDatetime="2011-05-04T20:38:11.000+04:00" code="0" invoiceId="1234567" shopId="100500"/>
-->

<!--
EPS и PNG файлы яндекс.кошелька
https://money.yandex.ru/partners/doc.xml?id=522991

EPS и PNG других платежных методов
https://money.yandex.ru/doc.xml?id=526421
-->

<!--
Все CMS модули и инструкции по настройке: https://kassa.yandex.ru/integration#cms

Список CMS с поддержкой "Умного платежа": 1С-Битрикс (Y.CMS), ECShop 2.7+, HostCMS 6.x, Insales, Joomla 3.х +JoomShopping 4.х, ModX 1.х + Shopkeeper 1.х, ModX 2.х + Shopkeeper 2.3.х, OpenCart 1.5.х, Opencart 2.0.x+ (Y.CMS), Prestashop 1.6.x (Y.CMS), Shopify, Simpla CMS 2.3+, Webasyst Shop-Script (Y.CMS) для 5.х и 6.х, WordPress 4.x WooCommerce 2.3+
-->

</body></html>