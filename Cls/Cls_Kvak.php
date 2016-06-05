<?php

defined ('ROOT') or exit();
//$user = 'CD20';
class Cls_Kvak {
 public $ingroup = array(); //Массив группа => пользователи
 public $chmod = array(); //Массив группа => доступ
 public $chmods; //Доступ по всем группам, в которых есть пользователь
 
 public $user; //текущий пользователь
 public $groups = array(); //группы, к которым принадлежит текущий юзер
 public $vgroup; //Показываем старшую группу, к которой принадлежит юзер
 public $EN_vgroup; //старшая группа, к которой принадлежит юзер в оригинал. названии
 protected $group2rating; //Массив группа => рейтинг группы
 
 public function __construct($username="") {
  $rusgroup = array ( //Перевод групп на Великий и Могучий
               'Guest' => 'Гость',
			   'Student' => 'Студент',
			   'Diplomnic' => 'Дипломник', 
			   'Aspirant' => 'Аспирант', 
			   'Kandidat' => 'Кандидат',
			   'Doctor' => 'Доктор наук',
			   'Academic' => 'Академик',
			   'SFR' => 'СФР',
			   'VFR' => 'ВФР',
			   'AFR' => 'АФР',
			   '4R' => 'Админ'
			   );
  if (empty($GLOBALS['user']) && empty($username)) {
   $this->user = 'Гость';
   $vgroup[0] = 'Guest';
  }
  else {
   if (empty($username)) $this->user = $GLOBALS['user'];
   else $this->user = $username;
   $this->groups[] = 'Student'; //По умолчанию залогиненные пользователи - студенты
   $vgroup[1] = 'Student'; //Эта группа у всех
  }
  $this->chmods = '';
  $ingroup_path = ROOT . 'conf/kvak/groups/';
  $ingroup_array = scandir($ingroup_path);
  
  //Получаем массив группа => пользователи
  foreach ($ingroup_array as $group) {
   if ($group == '.' || $group == '..') continue;
   $tmp = explode('#', $group);
   $rating = $tmp[0];
   $group = $tmp[1];
   if (is_numeric($rating)) $group2rating[$group] = $rating;
   else $group2rating[$group] = '';
   $this->ingroup[$group] = file($ingroup_path . $rating . '#' . $group, FILE_IGNORE_NEW_LINES);
  }

  //Получаем список групп, к которым принадлежит текущий юзер
  foreach ($this->ingroup as $group => $users) {
   if (in_array($this->user, $users)) {
    $this->groups[] = $group;
	$vgroup[$group2rating[$group]] = $group;
   }
  }
  krsort($vgroup);
  $vgroup = current($vgroup);
  
  asort($group2rating, SORT_NUMERIC);
  $this->group2rating = $group2rating;
  $this->EN_vgroup = $vgroup;
  $this->vgroup = $rusgroup[$vgroup];
  
  
  //+ наследуются младшие группы
  foreach ($this->group2rating as $grp => $rat) {
   if ($rat < 1) continue;
   if ($rat > $this->group2rating[$this->EN_vgroup]) break;
   $this->groups[] = $grp;
  }
  //
 }
}

class Cls_Kvak_Items extends Cls_Kvak {
 ##
 #Структура создания пункта квака, которую запоняем вручную
 public $img_src = '';
 public $a_title = '';
 public $img_alt = '';
 public $img_class = 'img_right_menu';
 public $div_class = 'border_right_menu'; // | border_right_menu2line
 public $f = 'n/a';
 public $title = '';
 public $title2 = '';
 public $active = 'off';
 #
 ##
 



/*
* Конструктор с указанием доступа
* @param string - (r, w, x, e, E, d, D), x - создавать темы, e/E - править свои/чужие топики, d/D - удалять свои/чужие топики
*/
 public function __construct() {
  parent::__construct();
  $this->chmod['Guest'] = 'r'; //////////////////
  $this->chmod['Admin'] = 'rwxED'; ////////////////////
  $this->chmod['SuperModerator'] = 'rwxED'; /////////////////
  $this->chmod['Student'] = 'rwx'; ////////////////
  
  $this->chmod['Kandidat'] = 'e';
  $this->chmod['Doctor'] = 'd';
 }
 
 public function str_unique($str) {
  return join(array_unique(str_split($str)));
 }
 
 public function get_chmods() {
  $chmods = '';
  foreach ($this->groups as $group) {

   $chmods .= isset($this->chmod[$group]) ? $this->chmod[$group] : '';
  }
  $chmods = $this->str_unique($chmods);
  return $chmods;
 }
 
 public function kvak() {
  $this->chmods .= $this->get_chmods(); //Какие права имеет юзер на форум
  if (!strpbrk($this->chmods, 'rED')) return '';
  if ($this->active == 'off') {
   $link = <<< LINK
   <!--$this->chmods--> <a class="right_link_kva" href="/kvak/$this->f/" title='$this->a_title'>$this->title</a> $this->title2
LINK;
  }
  else {
   $link = <<< LINK
    <a href="#main_top" class="visited" onclick="blink('actual_title')">$this->title</a> $this->title2</a>
LINK;
  }
  $new_kvak = <<<KVAK
  
   <img src="$this->img_src" alt="$this->img_alt" class="$this->img_class">
   <div class="$this->div_class">
    $link
   </div>
   <br class="break">
KVAK;
  return $new_kvak;
 }
}