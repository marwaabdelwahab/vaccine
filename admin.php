<?php
include "connect.php";

$stm1=$con->prepare("SELECT * FROM `admin`");

$stm1->execute();

$admin =$stm1->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($admin);
?>