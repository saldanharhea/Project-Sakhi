 
<!DOCTYPE html>
<html>
<title>Sakhi- Home-English</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="shortcut icon" href="img/re.ico" />


<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
.btn:hover {
    background-color: yellow;
}

 #map {
        height: 700px;
      }
      /* Optional: Makes the sample page fill the window. */
      



      

</style>
<body style="background-color:#FFFBDC">




<!-- Header -->

    <div class=" " style="background-color:#253657;margin:0px 15px 0px 15px;color:#FFF9DF;position:relative">
      
    <img src="img/23.png" alt="logo" class="w3-display-topleft " style="margin:0% 0% 0% 5%;padding-top: 10px">

    <span style="position:relative;left:10%;font-family:Nanum Brush Script;color:#FFF9DF;;font-size:48px" >sakhi</span>
  
    <span style="position:absolute;right:7%;font-weight: bold;">

      <form action="infoEN.html" style="display:inline">
      <button class="w3-button  btn w3-round-large w3-margin  " style="background-color:#F17D57;color:#253657;font-family: Georgia;padding:10px;"> Know About the Problem</button>
      </form>

      <a href="indexHN.html" style="color:#72E8FF;text-decoration: none;">HN</a></span>
    
</div>
   






      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sakhi";?>



    <div id="map" style="margin:0px 16px"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });

        <?php
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM hospital";

$lat= array();
$lon= array();
$name= array();



$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $lat[]=$row["latitude"];
        $lon[]=$row["longitude"];
        $name[]=$row["Health_Facility_Name"];


        
    }
} 

$x=0;
$len = sizeof($lat);




?>









<?php for ($x = 0; $x <= 2000; $x++) {?>

var markers= new google.maps.Marker({
          position: new google.maps.LatLng(<?php echo $lat[$x]?>,<?php echo $lon[$x]?> ),
          icon:'img/i1.png',
          map: map,
          clickable: true,
        }); 



<?}?>














        infoWindow = new google.maps.InfoWindow;


var l=0; 
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Your Location.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }



    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYus5DnQ1DTIBgehgJwJN3xAU0izOD4tc&callback=initMap">
</script>
  </body>
</html>