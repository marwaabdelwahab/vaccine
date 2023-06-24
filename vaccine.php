<?php
include "connect.php";

$stm=$con->prepare("SELECT * FROM `vaccine`");
$stm->execute();
$vaccine =$stm->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($vaccine);





 ?>