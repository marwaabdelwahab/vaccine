<?php
  
  include "connect.php";

  $search= filterRequset("search");

  getAllData("vaccine" ,"Name LIKE '%$search%'");
?>
