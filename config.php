
<?php
$conect = NULL;
$db = NULL;
 $conect = mysqli_connect('localhost','root','');
 $db = mysqli_select_db($conect,'combofilmes');
 
 mysqli_set_charset($conect,"utf8");
?>