 <?php
 require 'config.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $adhar_no = test_input($_POST["adhar_no"]);
  $name = test_input($_POST["name"]);
  $lname = test_input($_POST["lname"]);
  $spouse = test_input($_POST["spouse"]);
  $address = test_input($_POST["address"]);
  
  $village = test_input($_POST["village"]);
  $state = test_input($_POST["state"]);
  $DOB = test_input($_POST["DOB"]);
  $phone = test_input($_POST["phone"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO mother (adhar_card_number, First_Name, Last_Name, DOB, spouse, address, village, state, mobile_number)
VALUES ('$adhar_no', '$name', '$lname', '$DOB', '$spouse', '$address', '$village', '$state', '$phone')";

if (mysqli_query($conn, $sql)) {
    header("Location:motherReg.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>