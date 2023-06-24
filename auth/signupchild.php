<?php
include "../connect.php";

$Child_Name= filterRequset("Child_Name");
$Age= filterRequset("Age");
$User_id= filterRequset("User_id");

$stmt = $con->prepare("SELECT  `Child_Name`, `Age` FROM `child` WHERE User_id=? ");



$stmt->execute();

$count=$stmt->rowCount();

if($count> 0){
    printFailure("User_id IS Exists");
 }
 else{
     $data=array(
        
         "Child_Name" => $Child_Name,
         "Age" =>$Age,
         "User_id"=>$User_id

        // "users_verifycodI8e" => $verfiycode,
     );
    // sendEmail($email, "Verfiy Code", "Verfiy Code $verfiycode ");
     insertData("child", $data);
 }
 