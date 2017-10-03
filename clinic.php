<!DOCTYPE html>
<html>
<title>Child Care</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<link rel="shortcut icon" href="img/re.ico" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
.btn:hover {
    background-color: yellow;

}
 #st{
 font-family:Klee;
 font-weight:bolder;;
 }

#inputer{
  background-color:#FFF9DF;
  font-size: 22px;
  border: 2px solid #FFF9DF;
  color:#253657;border-color:#253657;
}

#inputer2{
  background-color:#FFF9DF;
  font-size: 22px;
  border: 2px solid #FFF9DF;
  color:#952551;border-color:#253657;
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
   







<div class=" w3-center" style="background-color:#FFF9DF;margin:0px 15px 0px 15px;color:#253657;font-family:Toppan Bunkyu Midashi Gothic;">
     <br><br><br><br>
    <span class="w3-xlarge"><div class="w3-center w3-xxxlarge" style="font-family:Toppan Bunkyu Midashi Gothic;">Checkup Details</div></span>

    <br><br>

    




    
</div>


  <div class="w3-row" style="margin:0px 16px">
    <div  class="w3-container w3-quarter" id="st">
      <h2 id="st"><input checked class="w3-round-large w3-margin" id="inputer" type="radio" name="check" value="yes"  onclick="document.getElementById('main').style.display = 'block'">
       Child Checkup
      </h2> 
    </div>
    <div class="w3-container w3-quarter">
      <h2 id="st"><input class="w3-round-large w3-margin" id="inputer" type="radio" name="check" value="no" 

        onclick="document.getElementById('main').style.display = 'none'">Mother Checkup </h2> 
    </div>
   
 
</div>

<form action="insert_child_clinic_info.php" method="Post">
  <div id="main" class="w3-row" style="margin:0px 16px;">
    


    <div class="w3-row" >
    <div class=" w3-container w3-quarter" >
      <h2 id="st">AN/Birth Registeration</h2> 
    </div>
    <div class="w3-container w3-quarter">
      <h2><input class="w3-round-large w3-margin"id="inputer" type="text" name="adhar_no"></h2> 
    </div>
    <div class="w3-container w3-quarter">
      <h2 id="st">Mothers Name</h2>
    </div>
    <div class="w3-container w3-quarter">
      <h2><input class="w3-round-large w3-margin" id="inputer" type="text" name="spouse"></h2> 
    </div>
  </div>


  
<?php
require 'config.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);



$sql = "SELECT Vaccine_ID,Vaccine_Name FROM vaccine ";
$result = mysqli_query($conn, $sql);



?>









  <div class="w3-row" >
    <div class=" w3-container w3-quarter" >
      <h2 id="st">Vaccine Name</h2> 
    </div>



    <div class="w3-container w3-quarter">
      <h2>

        <select class="w3-round-large w3-margin" id="start" name="vname" style="background-color:#FFF9DF;
  font-size: 22px;
  border: 2px solid #FFF9DF;
  color:#253657;border-color:#253657;">

         
           <?php while($row = mysqli_fetch_assoc($result)) { ?>
           <option value="<?php echo $row["Vaccine_ID"] ?>"><?php echo $row["Vaccine_Name"] ?></option>
           <?php }?>
          </select></h2> 

   


    </div>



<div class=" w3-container w3-quarter" >
      <h2 id="st">Date Of Vacination</h2> 
    </div>


    <script type="text/javascript">

      var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth()+1; //January is 0!
      var yyyy = today.getFullYear();
      if(dd<10){
        dd='0'+dd
      } 
      if(mm<10){
        mm='0'+mm
      } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("ck").setAttribute("max", today);


    </script>
    <div class="w3-container w3-quarter">
      <h2><input class="w3-round-large w3-margin" id=" ck" type="Date" name="dov"  max='2017-10-03' style="background-color:#FFF9DF;
  font-size: 22px;
  border: 2px solid #FFF9DF;
  color:#494A95;border-color:#253657;"></h2> 
    </div>



</div>
    


<div class="w3-row" >
    <div class=" w3-container w3-quarter" >
      <h3 id="st">Vaccination Performed By </h3> 
    </div>
  <div  class="w3-container w3-quarter" id="st">
      <h2 id="st"><input checked class="w3-round-large w3-margin" id="inputer" type="radio" name="check" value="Sakhi"  >
       Sakhi
      </h2> 
    </div>
    <div class="w3-container w3-quarter">
      <h2 id="st"><input class="w3-round-large w3-margin" id="inputer" type="radio" name="check" value="Health Center" >Health Center </h2> 
    </div>

    <div class="w3-container w3-quarter">
      <h2 id="st"><input class="w3-round-large w3-margin" id="inputer" type="radio" name="check" value="Clinical Doctor" >Clinical Doctor</h2> 
    </div>
</div>

<div style="margin:0px 40%" class="w3-jumbo">
 <input class="w3-round-large w3-margin w3-padding w3-xxlarge" style="background-color:#253657;
  font-size: 22px;
  border: 2px solid #FFF9DF;
  color:#FFF9DF;" type="submit" value="Insert Details">
    
  </div>
  


</div>

</form>
  </div>
<br><br>











<!-- Footer -->

<div class="w3-container w3-padding-32  w3-center" style="background-color:#253657;margin:0px 15px">
  
  <a href="#" class="w3-button  btn w3-round-large w3-margin" style="background-color:#253657;font-size: 22px;border: 2px solid #FFF9DF;color:#FFF9DF;"><i class="fa fa-arrow-up w3-margin-right"></i>.     To the top</a>
  
</div>



</body>
</html>
