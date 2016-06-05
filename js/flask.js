//Функции для колб в /files/

//подгружаем некоторые картинки заранее
pic = new Image();
pic.src="/files/img/red_button/red_button_03_on.gif";

//Некоторые глобальные переменные
var flask_t = 0;
var flask_tmp = true;
var flask_o = true;
var flask_timer = 0;
var flask_over = 0;
var flask_opacity = 0;

//оболочка
function flask(obj, t) {
 clearTimeout(flask_timer);
 if (flask_t == t) {
  flask0(); //перевернули один раз колбу - и хватит
  flask_t = 0;
  return;
 }
 flask0();
 flask_t = t;
 tmp_obj = obj;
 flask_main(obj);
}

//переворот колбы
function flask_main(obj, i) {
 var i = i || 1;
 var  box = gpnrGetClass('box');
 box = box[0];
 obj.style.backgroundPosition = "-" + (i * 140 + i) + "px 0px";
 
 if (i == 11) {
  flask_list(obj, box);
  flask_tmp = false;
  return;
 }
 
 if (obj != tmp_obj) {
  flask0();
  return;
 }
 
 setTimeout(function () {flask_main(obj, ++i);}, 20);
}

//выливаем содержимое колбы
function flask_list(obj, box) {
 var wch = 0;
 var lr = 5 * ((obj.offsetLeft + 150) / parseInt(document.body.clientWidth));
 var intMarginLeft = 0;
 box2 = gpnrGetClass('box2');
 box2 = box2[0];
 box2.innerHTML = document.getElementById('flask_ul_'+flask_t).innerHTML;
 box.style.overflow = 'hidden';
 box.style.width = 0 + 'px';
 box.style.display = 'none';
 box.style.top = 5000 + obj.offsetTop + obj.parentNode.offsetTop + 140 + 'px';
 box.style.marginLeft = obj.offsetLeft + 150 + 'px';
 box.style.left = '1%';
 var i = setInterval(function () {
  if (wch < 95) wch = ((wch + 5) > 95) ? 95 : wch = wch + 5;
  setElementOpacity(box, (wch/100));
  box.style.width = wch + '%';
  intMarginLeft = (parseInt(box.style.marginLeft) - (10 * (parseInt(document.body.clientWidth)/1000) * lr)) > 0 ? (parseInt(box.style.marginLeft) - (10 * (parseInt(document.body.clientWidth)/1000) * lr)) : 0;
  box.style.marginLeft = intMarginLeft + 'px';
  if (wch == 95 && parseInt(box.style.marginLeft) == 0) {
   box.style.overflow = 'visible';
   clearInterval(i);
  }
 }, 20);
 box.style.display = 'block';
}

//убрали мышку с колбы (оболочка)
function flask_out(t) {
 flask_opacity = 0;
 if (flask_t == 0)  return;
 var  box = gpnrGetClass('box');
 box = box[0];
 //setElementOpacity(box, 0.95);
 var flf = flask_list_fading(box, t);
 clearTimeout(flask_timer);
 if (flask_tmp == true || flf == false) {
  flask_out_main();
  return;
 }
 flask_timer = setTimeout(
  function() {
   if (flask_o == true && flask_t != flask_over) flask_out_main();
  }, 1000
 );
}

function flask_out_main() {
 flask0();
 flask_tmp = true;
 tmp_obj = Math.random();
 flask_t = 0;
}

function flask_list_fading(box, t, ch) {
 if (flask_t != t) return;
  //alert(t + ':' + flask_opacity);
 if (flask_opacity == t) {
  setElementOpacity(box, 0.95);
  return;
 }
 var ch = ch || 1;
 if (ch < 0.2) {
  return;
 }
 if (flask_o == false) {
  setElementOpacity(box, 0.95);
  return;
 }
 var i;
 setTimeout(
  function() {
   setElementOpacity(box, ch);
   ch = ch - 0.1;
   flask_list_fading(box, t, ch);
  }, 100
 );
 return true;
}

//колбу в исходное положение
function flask0() {
 var fb = gpnrGetClass("files_body");
 for (var i = 0; i < fb.length; i++) {
  fb[i].style.backgroundPosition = '0px 0px';
 }
 var  box = gpnrGetClass('box');
 box = box[0];
 box.style.display = 'none';
}


function f_flasks() {
 var flasks = document.getElementById('flasks');
 var flask_title;
 var flask_margin;
 var tmp = 1;
 while (true) {
  if (!document.getElementById('flask_ul_' + tmp))   break;
  tmp++;
 }
 fch = tmp;
 for (i = 1; i < fch; i++) {
  flask_title = document.getElementById('flask_title_' + i).innerHTML.split('(');
  flask_title = flask_title[0];
  flask_margin = (30 - flask_title.length);
  flasks.innerHTML += '<div class="files_body" onclick="flask(this, ' + i + ');" onmouseover="flask_over = ' + i + '; flask_opacity = ' + i + ';" onmouseout="flask_out(' + i + '); flask_over = ' + '-1' + ';"><table class="files_title" style="margin-left:' + flask_margin + 'px;"><tr><td>' + flask_title + '</td></tr></table></div>';
 }
 flasks.innerHTML += '<div class="footer_ie">&nbsp;</div>';
}