<?php
include "connect.php";

$stm=$con->prepare("SELECT * FROM `user`");
$stm->execute();
$user =$stm->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($user);





 ?>
