<?php
 require 'config.php';

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $adhar_no = $_POST["adhar_no"];
  $vname = $_POST["vname"];
  $dov = $_POST["dov"];
  $check = $_POST["check"];


}






$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "Select Child_ID from child where adhar_card_number ='$adhar_no'";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       $res =$row["Child_ID"];
    }

}


echo $vname;

/*$sql2 = "Select Vaccine_ID from vaccine where Vaccine_Name ='$vname'";

$result2 = mysqli_query($conn, $sql2);


if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while($row2 = mysqli_fetch_assoc($result2)) {
       $res2 =$row2["Vaccine_ID"];
    }

}
*/

$sql3 = "INSERT INTO child_vaccine (Child_ID, Vaccine_ID,date_taken,given_by)
VALUES ('$res','$vname','$dov','$check')";


if (mysqli_query($conn, $sql3)) {
    header("Location:clinic.php");
} else {
    echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>