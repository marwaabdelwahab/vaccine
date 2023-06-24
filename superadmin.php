<?php
include "connect.php";

$stm2=$con->prepare("SELECT * FROM `superadmin`");

$stm2->execute();

$superadmin =$stm2->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($superadmin);
?>