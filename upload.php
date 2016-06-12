<!DOCTYPE html>
<html>
<body>

<?php
if (!empty($_GET['url'])) echo "The file <a href='".$_GET['url']."'>".$_GET['url']."</a> has been uploaded.<br><br>";
?>

<form action="/components/topic/upload_img.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html> 