<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mktravels";
$tb1_name="booking";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("connection failed:". mysqli_connect_error());
}
$a=$_POST['firstname'];
$b=$_POST['lastname'];
$c=$_POST['birthdate'];
$d=$_POST['gender'];
$e=$_POST['username'];
$f=$_POST['password'];
$sql="INSERT INTO $tb1_name(firstname,lastname,birthdate,gender,username,password)VALUES('$a','$b','$c','$d','$e','$f')";

if(mysqli_query($conn,$sql))
{
header("Location: http://localhost/mega/booking.html");
}
else
{
echo "Error" .$sql . "<br>" .mysqli_error($conn);
}
mysqli_close($conn);

?>
