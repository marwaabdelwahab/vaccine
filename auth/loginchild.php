<?php
include "../connect.php";

$Child_Name= filterRequset("Child_Name");




//$stmt=$con->prepare("SELECT * FROM `user` WHERE Email =? OR 'Password' =? ");

//$stmt->execute(array($Email,$Password));

//$count=$stmt->rowCount();
//result($count);
getData("child","Child_Name =?  ",array($Child_Name));

?>


