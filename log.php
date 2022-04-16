<?php
$servername='localhost';
$username='root';
$password='';
$database='Now';
$con=mysqli_connect($servername,$username,$password,$database);
$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="SELECT * FROM Register WHERE email='$email' AND pass='$pass'";
$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res)==1)
{
header('location:aftel.php');
exit();
}
else
{
  echo ("<script LANGUAGE='JavaScript'>
      window.alert('Invalid Login.');
     window.location.href='Login.php';
      </script>");
exit();
}
?>
