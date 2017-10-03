 <?php
 require 'config.php';

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $adhar_no = test_input($_POST["adhar_no"]);
  $concept = test_input($_POST["con"]);

}
$next_date= date('Y-m-d', strtotime($concept. ' + 280 days'));



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $comment = htmlspecialchars($comment);
  return $data;
}

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "Select Mother_ID from mother where adhar_card_number ='$adhar_no'";


  


$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       $res =$row["Mother_ID"];
    }

}


$sql2 = "INSERT INTO pregnancy (Mother_ID, pregnancy_date,pregnancy_comment,due_date)
VALUES ('$res','$concept','$comment','$next_date')";


if (mysqli_query($conn, $sql2)) {
    header("Location:motherReg.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>