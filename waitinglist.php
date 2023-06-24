<?php

include "connect.php";


//$User_ID= filterRequset("User_ID");
//$Vaccine_ID= filterRequset("Vaccine_ID");
//$request= filterRequset("request");



$stm=$con->prepare("SELECT `ID`, `user`.`Name` as `user_name`, `Email`, `vaccine`.`Name` as `vaccine_name` FROM `user`, `uservaccine`, `vaccine`
 WHERE `uservaccine`.`User_ID` = `ID` AND `uservaccine`.`Vaccine_ID` = `vaccine`.`Vaccine_ID` AND `request` = '0';");


//$stm->execute(array($User_ID, $Vaccine_ID, $request ));

$stm->execute();

$result = $stm->fetchall();

$count=$stmt->rowCount();

if($stm->execute()){
    echo json_encode(array("status" =>"success",  "data" => $result ) );

}
else{
    echo json_encode(array("status"=>"fail"));
}

?>