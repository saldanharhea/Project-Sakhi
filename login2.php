<?php
$con=mysqli_connect("localhost","root","","sakhi");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $u = $_POST["username"];
  $p = $_POST["password"];
}


$sql="SELECT * from sakhi where username='$u' and sakhi_password='$p'";
$result=mysqli_query($con,$sql);
$count = mysqli_num_rows($result);
if($count == 1) {
	header("Location:clinic.php");
}
else
{
	//header("Location:login.html");
	header("Location:login.html");
}

?>