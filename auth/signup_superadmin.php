<?php
include "../connect.php";

$organization_ID= filterRequset("Organization_ID");
$name= filterRequset("Name");
$email= filterRequset("Email");
$password= filterRequset("Password");
$location= filterRequset("Location");
$phone= filterRequset("Phone");

$stmt=$con->prepare("INSERT INTO `superadmin`(`Organization_ID`, `Name`, `Email`, `Password`, `Location`, `Phone`) 
VALUES (?,?,?,?,?,?)
");

$stmt->execute(array($Organization_ID,$Name,$Email,$Password,$Location,$Phone));

$count=$stmt->rowCount();

if($count> 0){
    echo json_encode(array("status"=>"success"));

}
else{
    echo json_encode(array("status"=>"fail"));
}

?>