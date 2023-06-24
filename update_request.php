<?php

include "connect.php";


$User_ID= filterRequset("User_ID");
$Vaccine_ID= filterRequset("Vaccine_ID");
//$request= filterRequset("request");



$stm=$con->prepare("UPDATE `uservaccine` SET `request`='1' WHERE `User_ID`= ? OR `Vaccine_ID`=? ");


$stm->execute(array($User_ID, $Vaccine_ID ));

$stm->execute();


$count=$stmt->rowCount();

if($stm->execute()){
    
    echo json_encode(array("status"=>"success", "id"=>$con->lastInsertId()));

}
else{
    echo json_encode(array("status"=>"fail"));
}

?>