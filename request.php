<?php

include "connect.php";


$User_ID= filterRequset("User_ID");
$Vaccine_ID= filterRequset("Vaccine_ID");
//$request= filterRequset("request");



$stm=$con->prepare("INSERT INTO `uservaccine`( `User_ID`, `Vaccine_ID`, `request`) VALUES (?,?,?);");


$stm->execute(array($User_ID, $Vaccine_ID, '0' ));

 $stm->execute();
// echo json_encode($stm);

// $count=$stmt->rowCount();

if($stm->execute()){
    
    echo json_encode(array("status"=>"success", "id"=>$con->lastInsertId()));

}
else{
    echo json_encode(array("status"=>"fail"));
}
?>