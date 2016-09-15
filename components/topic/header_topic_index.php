<?php
SetCookie("antispam", mt_rand(1,100000));
$topic_str3 = '';
$topic_str4 = '';
$topic_out = '';

  if (empty($GLOBALS['user']) || $GLOBALS['user'] == 'Гость') {
   if (isset($error_auth)) $topic_str3 = '<span style="color:red">Хм... А мы точно знакомы? Попробуйте еще раз:</span>';
   else $topic_str3 = 'Если вы зарегистрированы, введите логин/пароль:';
   $topic_str4 = '
      <form class="auth_form" action="." method="POST"> 
       <input class="login" name="login" type="text"> 
	   <input class="password" type="password" name="password"> 
	   <input name="submit" class="auth" value="Вход" type="submit"> 
	   <!--input name="reg" class="reg" value="Регистрация" type="button" onclick="reg();"--> 
	  </form>
   ';
   $meta['head'] = 'Добро пожаловать в наш магазин!  &nbsp;<br>
Здесь вы можете задать вопрос по товару<br>
   ' . $topic_str3 . '
     ' . $topic_str4 . '&nbsp;
   ';
  }
  else {
   $topic_str3 = '';
   $topic_out = '<a class="menu_top" href="/topic/out">[Выйти]</a><br>';
  }
  
  
  if (!isset($m_title)) $m_title = $topic_title;
  $meta['title'] = 'Форум';
  $meta['mtitle'] = strip_tags($m_title) . ' ::: Форум';
  $meta['description'] = '';
  $meta['keywords'] = '';
  $meta['css'] = '/css/common.css';
  if (empty($meta['head'])) $meta['head'] = 'Здравствуйте, <b>' . $f[11]->user . '</b>!<br>
    Добро пожаловать в наш магазин.  &nbsp;<br>
    ' . $topic_str3 . 'Здесь вы можете задать вопрос по товару.<br>
    ' . $topic_str4 . '&nbsp;
  ';
  $meta['menu'] = '/topic/';