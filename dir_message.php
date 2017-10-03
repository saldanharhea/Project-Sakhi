<?php
$con=mysqli_connect("localhost","root","","Sakhi");


 $uid = '8668623901';
 $pwd = 'ACMWPunjab02';
 

include('way2sms_api.php');
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $msg = $_POST["message"];
}

$sql="SELECT phone from sakhi";

if ($result=mysqli_query($con,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
		$res = sendWay2SMS($uid, $pwd, $row[0], $msg);
		if (is_array($res))
        header("Location:msg.html")

    else
        echo $res;
	
	//echo $row[0];
    }
  mysqli_free_result($result);
}

mysqli_close($con);
?>