<?php
session_start();

$host ="localhost"; 
$user ="root"; 
$password =""; 
$dbname="mktravels"; 

$con = mysqli_connect($host,$user,$password,$dbname);


if(!$con)
{
 die("connection failed: " . mysql_connect_error());
}
?>
