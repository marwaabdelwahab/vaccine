<?php
include "../connect.php";

$ID= filterRequset("ID");
$Name= filterRequset("Name");
$Email= filterRequset("Email");
$Password= sha1($_POST['Password']);
$BirthDay= filterRequset("BirthDay");
$Location= filterRequset("Location");
$Gender= filterRequset("Gender");
$Phone= filterRequset("Phone");
//$verfiycode  =  rand(10000,99999);

$stmt = $con->prepare("SELECT * FROM `user` WHERE Email=? ");

$stmt->execute(array($Email));

$count=$stmt->rowCount();

if($count> 0){
   printFailure("Email IS Exists");
}
else{
    $data=array(
        "ID" => $ID,
        "Name" => $Name,
        "Email" => $Email,
        "Password" => $Password,
        "BirthDay" => $BirthDay,
        "Location" => $Location,
        "Gender" => $Gender,
        "Phone" => $Phone,
       // "users_verifycodI8e" => $verfiycode,
    );
   // sendEmail($email, "Verfiy Code", "Verfiy Code $verfiycode ");
    insertData("user", $data);
}

?>





