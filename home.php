<?php

  include "connect.php";

  $alldata=array();

  
  $alldata['status']= "success";

  $vaccine =getAllData("uservaccine", "request != 0" ,null, false); // عايزين نجيب الفاكسين اللي اليوزر طالبه مش كل الفاكسين


  $alldata['uservaccine']=$vaccine;

  echo json_encode($alldata);

?>