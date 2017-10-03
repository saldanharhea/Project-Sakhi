<!DOCTYPE html>
<html>
<title>Child Care</title>
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


</style>
<body style="background-color:#FFFBDC">

<script src="http://code.responsivevoice.org/responsivevoice.js">

</script>
<!-- Header -->

    <div class=" " style="background-color:#253657;margin:0px 15px 0px 15px;color:#FFF9DF;position:relative">
      
    <img src="img/23.png" alt="logo" class="w3-display-topleft " style="margin:0% 0% 0% 5%;padding-top: 10px">

    <span style="position:relative;left:10%;font-family:Nanum Brush Script;color:#FFF9DF;;font-size:48px" >sakhi</span>
  
    <span style="position:absolute;right:7%;font-weight: bold;"><button class="w3-button  btn w3-round-large w3-margin  " style="background-color:#F17D57;color:#253657;font-family: Georgia;padding:10px;"> Know About the Problem</button><a href="infoHN.html" style="color:#72E8FF;text-decoration: none;">HN</a></span>
    
</div>
   



<div class=" w3-center" style="background-color:#253657;margin:0px 15px 0px 15px;color:#FFF9DF;font-family:Toppan Bunkyu Midashi Gothic;">
     <br><br><br><br>
    <span class="w3-xxxlarge"> Immunization and Growth Monitoring of Infants </span>
    <br><br><br><br><br><br>
</div>



  <div class="w3-row-padding" id="about" style="margin:0px 7px;postion:absolute;z-index=1">
    

    <div class="w3-third w3-margin-bottom" style="background-color:#93CDCB">
      <div >
        <br><br>

        <div class="w3-display-container">
        <div style="height:464px">
       <a href="#" class="w3-button w3-display-middle  btn w3-round-large w3-margin" style="background-color:#253657;font-size: 22px;border: 2px solid #FFF9DF;color:#FFF9DF;"><i class="fa fa-newspaper-o w3-margin-right"></i> View Child Information</a></div>
     </div>
       <div style="line-height:89%;">
    <br>
</div>
      </div>
    </div>
 
    <div class="w3-twothird w3-margin-bottom" style="background-color:#253657">

      <div class="w3-display-container">
      <img src="img/s1.jpg" alt="John" style="width:100%; background-color:#253657;opacity:.3">

      <div class="w3-display-middle w3-xlarge w3-container">
       

       <a  href="http://localhost/sakhi/login.html" class="w3-button   btn w3-round-large w3-margin" style="background-color:#253657;font-size: 22px;border: 2px solid #FFF9DF;color:#FFF9DF;"><i class="fa fa-pencil-square-o w3-margin-right" onclick="drop()"></i> Register Pregnancy for Mother</a>

       <a href="http://localhost/sakhi/login2.html" class="w3-button   btn w3-round-large w3-margin" style="background-color:#253657;font-size: 22px;border: 2px solid #FFF9DF;color:#FFF9DF;"><i class="fa fa-pencil-square-o w3-margin-right" onclick="drop()"></i> Enter Clinical Details Of Child</a>

     </div>
    </div>

    </div>

</div>






<div class=" w3-center" style="background-color:#FFF9DF;margin:0px 15px 0px 15px;color:#253657;font-family:Toppan Bunkyu Midashi Gothic;">
     <br><br><br><br>
    <span class="w3-xlarge"><div class="w3-center">Alerts and Schemes To be Considered:</div>



<p style="margin:20px 90px;font-family:Klee;text-align: justify;" >


<?php 
      $con =mysqli_connect("localhost","root","","sakhi");

      $sql = "select * from schemes ";

      $result= mysqli_query($con,$sql);

      while($row = mysqli_fetch_assoc($result))
      {
        echo "Scheme Name".$row['scheme_name']."  <br> "."description".$row['description']."<br><br><br>";
      }

      ?>

 </span>
    <br><br><br>
</div>





<!-- Footer -->

<div class="w3-container w3-padding-32  w3-center" style="background-color:#253657;margin:0px 15px">
  
  <a href="#" class="w3-button  btn w3-round-large w3-margin" style="background-color:#253657;font-size: 22px;border: 2px solid #FFF9DF;color:#FFF9DF;"><i class="fa fa-arrow-up w3-margin-right"></i>.     To the top</a>
  
</div>



</body>
</html>
