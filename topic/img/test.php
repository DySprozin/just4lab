<?
for($i=0;$i<1000000;$i++){
echo ".";
fwrite(fopen("chss.txt","a+"),$i);
}
?>