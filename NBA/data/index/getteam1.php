<?php
//data/index/getCarousel.php
header("Content-Type:application/json");
require_once("../login/init.php");
$sql="select * from nba_team1";
$result=mysqli_query($conn,$sql);
echo json_encode(mysqli_fetch_all($result,1));