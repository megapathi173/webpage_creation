<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mktravels";
$tbl_name="booking";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("Connection failed" . mysqli_connect_error());
}
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM booking WHERE username='$username'";
$result = mysqli_query($conn,$sql);
if(!$result)
{
die('Could get data:'.mysqli_error());
}
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$d="{$row['password']}";
if($d==$password)
{
echo "signed in";
}
else
{
echo "incorrect password";
}
mysqli_close($conn);
?>  
