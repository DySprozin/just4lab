<?php
set_time_limit(0);

if (!empty($_POST['postText'])) {
 if (empty($_POST['TitleTheme']) && $_POST['antispam']  != md5($_COOKIE['antispam'])) $_POST['postText'] = '';
}


//if (!empty($_POST['postText'])) {
// if ($_POST['antispam']  == md5($_COOKIE['antispam'])) exit(1);
// else {
//  echo $_POST['antispam'] . '#' . md5($_COOKIE['antispam']);
//  exit;
// }
//}
require_once ROOT . 'components/HTMLPurifier/HTMLPurifier.auto.php';
$config_tmp = HTMLPurifier_Config::createDefault();
$config_tmp->set('Filter.YouTube', true);

$config_tmp->set('HTML.Trusted', true);





$purifier = new HTMLPurifier($config_tmp);


if (isset($_GET['f']) && ($_GET['f'] == 23 || $_GET['f'] == 11) && $_SERVER['REMOTE_ADDR'][0] == '7') {fwrite(fopen('text', 'a+'), print_r($GLOBALS, true));
//exit();
}
$topic_title = 'Последние &laquo;Ква!&raquo;';
$topic_body = '';



if (isset($_GET['out'])) {
 SetCookie ('login', '', time() - 86400000, '/');
 SetCookie ('password', '', time() - 86400000, '/');
 Header('Location: ' . $_SERVER['HTTP_REFERER']);
 exit();
}

if (!empty($_POST['login']) && !empty($_POST['password'])) {
 $login = $_POST['login'];
 $password = md5($_POST['password']);
 $link = mysql_query("SELECT * FROM users WHERE username='" . mysql_real_escape_string($login) . "' AND user_password='" . mysql_real_escape_string($password) . "';") or errDB();
 $auth = mysql_fetch_assoc($link);
 if (empty($auth['username'])) {
  $error_auth = 1;
 }
 else {
  $user = $auth['username'];
  SetCookie ('login', $login, time() + 86400000, '/');
  SetCookie ('password', $password, time() + 86400000, '/');
  Header('Location: ' . $_SERVER['HTTP_REFERER'] . '#comment_kva_box');
  exit();
 }
}
elseif (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
 $login = $_COOKIE['login'];
 $password = $_COOKIE['password'];
 $link = mysql_query("SELECT * FROM users WHERE username='" . mysql_real_escape_string($login) . "' AND user_password='" . mysql_real_escape_string($password) . "';") or errDB();
 $auth = mysql_fetch_assoc($link);
 if (empty($auth['username'])) {
  $error_auth = 1;
 }
 else $user = $auth['username'];
}



 ##
 #Список кваков
  for ($topic = 1; $topic < 300; $topic++) {
   $f[$topic] = new Cls_Topic_Items;
   $f[$topic]->f = $topic;
  }
/*  
  $f[13]->img_src = '/topic/img/muctr.gif';
  $f[13]->img_alt = 'РХТУ';
  $f[13]->title = 'О нашем РХТУ';

  
  $f[16]->img_src = '/topic/img/smile.gif';
  $f[16]->img_alt = ':-)';
  $f[16]->div_class = 'border_right_menu2line';
  $f[16]->title = 'Остров хорошего <br>настроения';
  
  
  $f[10]->img_src = '/topic/img/cup.gif';
  $f[10]->img_alt = 'ква!';
  $f[10]->title = 'Ква обо всем';
  $f[10]->title2 = ':-)';
  
  
  $f[19]->img_src = '/topic/img/games.gif';
  $f[19]->img_alt = ';]';
  $f[19]->title = 'Игры';
  
  
  $f[20]->img_src = '/topic/img/celebr.gif';
  $f[20]->img_alt = '*_*';
  $f[20]->title = 'Поздравления!';
  
  
  $f[14]->img_src = '/topic/img/tekh.gif';
  $f[14]->img_alt = '*_*';
  $f[14]->title = 'Техническая часть';
  $f[14]->a_title = 'Доступно, начиная с "Аспирантов"';
  $f[14]->chmod['Aspirant'] = 'rwx';
  $f[14]->chmod['Student'] = 'r';
  
  $f[22]->img_src = '/topic/img/bug.gif';
  $f[22]->img_alt = '}8{';
  $f[22]->title = 'От вируса до слона';
  $f[22]->chmod['Guest'] = '';
  $f[22]->chmod['Diplomnic'] = 'rwx';
  $f[22]->chmod['Student'] = '';
  
  $f[12]->img_src = '/topic/img/help.gif';
  $f[12]->img_alt = '(((O)))';
  $f[12]->div_class = 'border_right_menu2line';
  $f[12]->title = 'Скорая компьютерная <br>помощь';
  
  $f[23]->img_src = '/topic/img/bug.gif';
  $f[23]->img_alt = '}8{';
  $f[23]->title = 'Модераторский';
  $f[23]->chmod['Guest'] = '';
  $f[23]->chmod['Student'] = '';
  


  $f[21]->title = 'Учебные статьи';
  $f[1]->title = 'Закон, учеба, жизнь ';
  $f[25]->title = 'В наших лабораториях... ';
  $f[18]->title = 'Досуг';
  $f[2]->title = 'Компьютер';
  $f[3]->title = 'Не в шутку, не всерьез ';
  $f[4]->title = 'Новости университета ';
  $f[8]->title = 'Советы студентам ';
*/

  $f[11]->img_src = '/topic/img/bug.gif';
  $f[11]->img_alt = '[A]';
  $f[11]->title = 'Админский';
  $f[11]->chmod['Guest'] = '';
  $f[11]->chmod['Student'] = '';
  $f[11]->chmod['SuperModerator'] = '';


  $f[30]->title = 'Блог';
  $f[30]->img_src = '/topic/img/blog.gif';
  $f[30]->img_alt = '[B]';
  $f[30]->chmod['Guest'] = 'rw';
  $f[30]->chmod['Student'] = 'rw';
  $f[30]->chmod['SuperModerator'] = 'ED';

  $f[255]->title = 'Магазин';
  $f[255]->img_src = '/topic/img/blog.gif';
  $f[255]->img_alt = '[M]';
  $f[255]->chmod['Guest'] = 'rw';
  $f[255]->chmod['Student'] = 'rw';
  $f[255]->chmod['SuperModerator'] = 'ED';

  
 #
 ##

$main_css = "border"; 


 if (empty($_GET['f']) && empty($_GET['search'])) {
  $topic_body = join(file(ROOT . 'inc/topic/shop_index.htm'));
 }
 elseif (!empty($_GET['f']) && empty($_GET['t'])) {
  if (empty($f[$_GET['f']]->title) || !strpbrk($f[$_GET['f']]->get_chmods(), 'rED')) {
   $topic_title = '<span style="color:red">Такого квака не найдено :-(</span>';
   $topic_body = join(file(ROOT . 'inc/topic/shop_index.htm'));
  }
  //Пока создают темы только модеры/админы
  elseif (!empty($_POST['postText']) && strpbrk($f[$_GET['f']]->get_chmods(), 'D') && !empty($_POST['TitleTheme'])) {
   
   $theme_title=strip_tags($_POST['TitleTheme']);
   
   if (!strpbrk($f[$_GET['f']]->get_chmods(), 'D')) $post_text = strip_tags($_POST['postText']); //Только админы и модеры могут создавать крутые тексты
   else $post_text = $purifier->purify($_POST['postText']);

   $post_text = str_replace(array("\r", "\r\n"), '<br>', $post_text);

   mysql_query("INSERT INTO `topics`
               (`topic_title`, `topic_poster_name`, `topic_time`, `topic_views`, `forum_id`, `topic_status`, `topic_last_post_id`, `posts_count`, `sticky`, `topic_last_post_time`, `topic_last_poster`)
               VALUES ('$theme_title', '" . mysql_real_escape_string($f[$_GET['f']]->user) . "', now(), '0', " . (int)$_GET['f'] . ", '0', '1', '0', '0', now(), '" . mysql_real_escape_string($f[$_GET['f']]->user) . "');") or errDB($link);
   $link = mysql_query ("SELECT * FROM `topics` ORDER BY `topic_id` DESC") or errDB($link);
   $tmp = mysql_fetch_assoc($link);
   $tmp_topic = (int)$tmp['topic_id'];

   mysql_query("INSERT INTO `posts` 
               (`forum_id`, `topic_id`, `poster_name`, `post_text`, `post_time`, `poster_ip`, `post_status`) 
                VALUES ('" . (int)$_GET['f'] . "', '" . (int)$tmp_topic . "', '" . mysql_real_escape_string($f[$_GET['f']]->user) . "', '" . mysql_real_escape_string($post_text) . "', now(), '" . $GLOBALS['ip'] . "' , '0');") or errDB($link);
   $link = mysql_query ("SELECT * FROM `posts` WHERE `forum_id`='" . (int)$_GET['f'] . "' AND `topic_id`='" . (int)tmp_topic . "' ORDER BY `post_id` DESC") or errDB($link);
   $tmp = mysql_fetch_assoc($link);
   mysql_query("UPDATE `forums` SET
                `posts_count` = `posts_count` + 1
                WHERE `forum_id` = '" . (int)$_GET['f'] . "';") or errDB($link);
                
   mysql_query("UPDATE `forums` SET
                `topics_count` = `topics_count` + 1
                WHERE `forum_id` = '" . (int)$_GET['f'] . "';") or errDB($link);
                
   mysql_query("UPDATE `users` SET
                `num_posts` = `num_posts` + 1
                WHERE `username` = '" . mysql_real_escape_string($f[$_GET['f']]->user) . "';") or errDB($link);
   
   
   
   Header('Location: ' . $_SERVER['HTTP_REFERER']);
   exit();
  }
  else {
   $page = empty($_GET['page']) ? 1 : $_GET['page'];
   if (!empty($_GET['oldpage'])) $page = $_GET['oldpage'] + 1;
   $pages = paginator($_GET['f'], $page, "forum");
   $topic_pages = $pages;
   $topic_body = join(file(ROOT . 'inc/topic/shop_f.htm'));
   $topic_title = strip_tags($f[$_GET['f']]->title . ' ' . $f[$_GET['f']]->title2);
   $f[$_GET['f']]->active = 'on';
  }
   
 }
 elseif (!empty($_GET['f']) && !empty($_GET['t'])) {
  if (!strpbrk($f[$_GET['f']]->get_chmods(), 'rED')) { //Человек должен иметь право на чтение (r), либо быть модером
   $topic_title = '<span style="color:red">Такого квака не найдено :-(</span>';
   $topic_body = join(file(ROOT . 'inc/topic/shop_index.htm'));
  }
  else {
   if (!empty($_POST['postText']) && strpbrk($f[$_GET['f']]->get_chmods(), 'w') && empty($_POST['CreateTheme'])) {
    if (!strpbrk($f[$_GET['f']]->get_chmods(), 'D')) $post_text = strip_tags($_POST['postText']); //Только админы и модеры могут создавать крутые тексты
    else $post_text = $purifier->purify($_POST['postText']);

	$post_text = str_replace(array("\r", "\r\n"), '<br>', $post_text);
    mysql_query("INSERT INTO `posts` 
	            (`forum_id`, `topic_id`, `poster_name`, `post_text`, `post_time`, `poster_ip`, `post_status`) 
	             VALUES ('" . (int)$_GET['f'] . "', '" . (int)$_GET['t'] . "', '" . mysql_real_escape_string($f[$_GET['f']]->user) . "', '" . mysql_real_escape_string($post_text) . "', now(), '" . $GLOBALS['ip'] . "' , '0');") or errDB($link);
	$link = mysql_query ("SELECT * FROM `posts` WHERE `forum_id`='" . (int)$_GET['f'] . "' AND `topic_id`='" . (int)$_GET['t'] . "' ORDER BY `post_id` DESC") or errDB($link);
	$tmp = mysql_fetch_assoc($link);
	mysql_query("UPDATE `topics` SET
                 `topic_last_post_id` = '" . (int)$tmp['post_id'] . "',
                 `posts_count` = `posts_count` + 1,
                 `topic_last_post_time` = now(),
                 `topic_last_poster` = '" . mysql_real_escape_string($f[$_GET['f']]->user) . "'
                 WHERE `topic_id` = '" . (int)$_GET['t'] . "' AND `forum_id` = '" . (int)$_GET['f'] . "';") or errDB($link);
	mysql_query("UPDATE `forums` SET
                 `posts_count` = `posts_count` + 1
                 WHERE `forum_id` = '" . (int)$_GET['f'] . "';") or errDB($link);
				 
	mysql_query("UPDATE `users` SET
                 `num_posts` = `num_posts` + 1
                 WHERE `username` = '" . mysql_real_escape_string($f[$_GET['f']]->user) . "';") or errDB($link);
	
	Header('Location: ' . $_SERVER['HTTP_REFERER'] . '#comment_kva_box');
    exit();
   }

   
   //Удаление поста
   if (!empty($_GET['delpost']) && strpbrk($f[$_GET['f']]->get_chmods(), 'D')) {
   	$link = mysql_query ("SELECT * FROM `posts` WHERE `forum_id`='" . (int)$_GET['f'] . "' AND `topic_id`='" . (int)$_GET['t'] . "' ORDER BY `post_id` DESC") or errDB($link);
	if (mysql_num_rows($link) == 1 || $_GET['delpost'] < 1) {
	 Header('Location: ' . $_SERVER['HTTP_REFERER']);
     exit();
	}

    mysql_query ("DELETE FROM `posts` WHERE `post_id` = '" . (int)$_GET['delpost'] . "';") or errDB($link);
   	$link = mysql_query ("SELECT * FROM `posts` WHERE `forum_id`='" . (int)$_GET['f'] . "' AND `topic_id`='" . (int)$_GET['t'] . "' ORDER BY `post_id` DESC") or errDB($link);
	$tmp = mysql_fetch_assoc($link);
	
    mysql_query ("UPDATE `topics` SET 
	              `topic_last_post_id` = '" . (int)$tmp['post_id'] . "', 
				  `posts_count` = `posts_count` - 1, 
				  `topic_last_post_time` = '" . $tmp['post_time'] . "', 
				  `topic_last_poster` = '" . $tmp['poster_name'] . "' 
				  WHERE `topic_id` = '" . (int)$_GET['t'] . "' AND `forum_id` = '" . (int)$_GET['f'] . "';") or errDB($link);
    mysql_query ("UPDATE `forums` SET `posts_count` = `posts_count` - 1 WHERE `forum_id` = '" . (int)$_GET['f'] . "';") or errDB($link);
    mysql_query ("UPDATE `users` SET `num_posts` = `num_posts` - 1 WHERE `username` = '" . mysql_real_escape_string($f[$_GET['f']]->user) . "';") or errDB($link);
	Header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
		
   }
   
   if (!empty($_GET['deltop']) && strpbrk($f[$_GET['f']]->get_chmods(), 'D')) {
    $link = mysql_query("UPDATE `topics` SET `topic_status` = '2' WHERE `topic_id` = '".$_GET['deltop']."';") or errDB($link);
    $link = mysql_query("UPDATE `posts` SET `post_status` = '3' WHERE `topic_id` = '".$_GET['deltop']."';") or errDB($link);
    Header('Location: /topic/'.$_GET['f'].'/');
   }
   
   //Редактирование поста
   /*
   if (!empty($_GET['editpost']) && strpbrk($f[$_GET['f']]->get_chmods(), 'E')) {
    $link = mysql_query ("UPDATE `posts` SET `post_text`='??????' WHERE `post_id`='" . (int)$_GET['editpost'] . "';") or errDB($link);
    
   }*/
   $page = empty($_GET['page']) ? 1 : $_GET['page'];
   if (!empty($_GET['oldpage'])) $page = $_GET['oldpage'] + 1;
   
   if ($page == "all") {
    $GLOBALS['pages_on_topic'] = 9999999;
    $_GET['page'] = 1;
   }
   
   $align_topic = "align=right";
   $forum_top = '<div class="forum_top"><a href="/topic/' . $_GET['f'] . '/"><span>&lt;&lt;</span> ' . strip_tags($f[$_GET['f']]->title) . ' </a></div>';
   $pages = paginator($_GET['t'], $page, "topic");
   $topic_pages = $pages;
   $topic_body = join(file(ROOT . 'inc/topic/shop_t.htm'));
   $topic_title = '';
   
   $link = mysql_query("SELECT * FROM `topics` WHERE `topic_id`='" . (int)$_GET['t'] . "';") or errDB($link);
   $tmp = mysql_fetch_assoc($link);
   
   $m_title = $tmp['topic_title'];
   $main_css = "paper";
  }
 }
 elseif (!empty($_GET['search'])) {
  $search_who = array('чернику','кувшинки','клюкву','жуков','лягушек','жабу','ужа','улиток','куропатку');
  $tmp = array_rand($search_who);
  if (empty($_POST['searchtext'])) {
   $topic_title = 'Искать в болоте (' . $search_who[$tmp] . ')';
   $m_title = 'Поиск';
  }
  else {
   $topic_title = 'Результаты поиска <i class="lsearch">&laquo' . htmlspecialchars($_POST['searchtext']) . '&raquo;</i>';
   $m_title = 'Результаты поиска "' . htmlspecialchars($_POST['searchtext']) . '"';
  }
  $topic_body = join(file(ROOT . 'inc/topic/shop_s.htm'));
 }
 
if (!isset($pages)) $pages = '<img src="/img/dot.gif" alt="" width="20px" height="20px">';