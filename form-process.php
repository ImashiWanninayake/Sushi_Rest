<?php
include("config.php");
extract($_POST);
$sql = "INSERT INTO `contact-data`(`firstname`, `lastname`, `phone`, `email`, `massage`) VALUES ('".$firstname."','".$lastname."',".$phone.",'".$email."','".$message."')";
$result = $mysqli->query($sql);
if(!$result){
    die("<h1>"."Couldn't enter data: ".$mysqli->error);
}
echo "<h1>"."Thank You For Contacting Us ";


$mysqli->close();
?>


