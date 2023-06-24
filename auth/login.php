<?php
include "../connect.php";

$Email= filterRequset("Email");
$Password= sha1($_POST['Password']);



//$stmt=$con->prepare("SELECT * FROM `user` WHERE Email =? OR 'Password' =? ");

//$stmt->execute(array($Email,$Password));

//$count=$stmt->rowCount();
//result($count);
getData("user","Email =? OR 'Password' =?",array($Email,$Password));

?>
