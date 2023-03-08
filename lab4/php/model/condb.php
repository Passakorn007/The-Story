<?php
$host = "db"; // name service from docker compose
$user = "root";
$pass = "1234";
$db = "tb_student"; // name of database
// $host = ตัวแปร

try{
    $link = mysqli_connect($host,$user,$pass,$db);
    mysqli_query($link,"SET NAMES utf8");
}catch (Exception $e){
    echo "An error is " . $e . " : : " . mysqli_error($link);
}

?>