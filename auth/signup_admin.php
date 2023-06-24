<?php
include "../connect.php";

$Organization_ID= filterRequset("Organization_ID");
$Name= filterRequset("Name");
$Email= filterRequset("Email");
$Password= sha1($_POST['Password']);
$Location= filterRequset("Location");
$Phone= filterRequset("Phone");
$Superadmin_ID=filterRequset("Superadmin_ID");
$User_ID=filterRequset("User_ID");

$stmt = $con->prepare("SELECT * FROM `admin` WHERE Email=? ");

$stmt->execute(array($Email));

$count=$stmt->rowCount();

if($count> 0){
    printFailure("Email IS Exists");
 }
 else{
     $data=array(
         "Organization_ID" => $Organization_ID,
         "Name" => $Name,
         "Email" => $Email,
         "Password" => $Password,
         "Location" => $Location,
         "Phone" => $Phone,
         "Superadmin_ID"=> $Superadmin_ID,
         "User_ID"=>$User_ID

        // "users_verifycodI8e" => $verfiycode,
     );
    // sendEmail($email, "Verfiy Code", "Verfiy Code $verfiycode ");
     insertData("admin", $data);
 }

?>