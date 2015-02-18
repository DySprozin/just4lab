<?php

define ('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');

  function translit($st)
  {
    // ������� �������� "��������������" ������.
    $st=strtr($st,"������������������������_",
    "abvgdeeziyklmnoprstufh'iei");
    $st=strtr($st,"�����Ũ������������������_",
    "ABVGDEEZIYKLMNOPRSTUFH'IEI");
    // ����� - "���������������".
    $st=strtr($st, 
                    array(
                        "�"=>"zh", "�"=>"ts", "�"=>"ch", "�"=>"sh", 
                        "�"=>"shch","�"=>"", "�"=>"yu", "�"=>"ya",
                        "�"=>"ZH", "�"=>"TS", "�"=>"CH", "�"=>"SH", 
                        "�"=>"SHCH","�"=>"", "�"=>"YU", "�"=>"YA",
                        "�"=>"i", "�"=>"Yi", "�"=>"ie", "�"=>"Ye"
                        )
             );
    // ���������� ���������.
    return $st;
  }


$target_dir = ROOT . "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file2 = $target_dir . date("U") . '_' . translit(basename($_FILES["fileToUpload"]["name"]));
$target_file3 = date("U") . '_' . translit(basename($_FILES["fileToUpload"]["name"]));
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
if ($_FILES["fileToUpload"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file2)) {
        Header("Location: /upload.php?url=http://anabot.ru/uploads/". $target_file3);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?> 