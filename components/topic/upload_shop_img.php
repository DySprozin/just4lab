<?php

define ('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');

  function translit($st)
  {
    // Сначала заменяем "односимвольные" фонемы.
    $st=strtr($st,"абвгдеёзийклмнопрстуфхъыэ_",
    "abvgdeeziyklmnoprstufh_iei");
    $st=strtr($st,"АБВГДЕЁЗИЙКЛМНОПРСТУФХЪЫЭ_",
    "ABVGDEEZIYKLMNOPRSTUFH_IEI");
    // Затем - "многосимвольные".
    $st=strtr($st, 
                    array(
                        "ж"=>"zh", "ц"=>"ts", "ч"=>"ch", "ш"=>"sh", 
                        "щ"=>"shch","ь"=>"", "ю"=>"yu", "я"=>"ya",
                        "Ж"=>"ZH", "Ц"=>"TS", "Ч"=>"CH", "Ш"=>"SH", 
                        "Щ"=>"SHCH","Ь"=>"", "Ю"=>"YU", "Я"=>"YA",
                        "ї"=>"i", "Ї"=>"Yi", "є"=>"ie", "Є"=>"Ye"
                        )
             );
    // Возвращаем результат.
    return $st;
  }
$shopimage = '';  

for ($k = 0; $k < count($_FILES["ShopImage"]["name"]); $k++) {
  $search_inj = array("'", '"', "`", '&', ',', ';', "\\", "#");
  $target_dir = ROOT . "uploads/";
  $target_file = $target_dir . basename($_FILES["ShopImage"]["name"][$k]);
  $target_file2 = $target_dir . date("U") . '_' . translit(basename($_FILES["ShopImage"]["name"][$k]));
  $target_file2 = str_replace($search_inj, "", $target_file2);
  $target_file3 = date("U") . '_' . translit(basename($_FILES["ShopImage"]["name"][$k]));
  $target_file3 = str_replace($search_inj, "", $target_file3);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["ShopImage"]["tmp_name"][$k]);
      if($check !== false) {
          //echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["ShopImage"]["size"][$k] > 500000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG"
  && $imageFileType != "GIF") {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["ShopImage"]["tmp_name"][$k], $target_file2)) {
          $shopimage .= "/uploads/". $target_file3 . "#";
      } else {
          $shopimage .= '';
      }
  }
}
?> 