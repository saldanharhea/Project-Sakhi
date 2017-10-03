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


@font-face {
        font-family: "Dev";
        src: url(dev.ttf);
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
    <span class="w3-xlarge"><div class="w3-center w3-xxxlarge" style="font-family:Toppan Bunkyu Midashi Gothic;">Mother Registeration</div></span>

    <br><br>

    




    
</div>


  <div class="w3-row" style="margin:0px 16px">
    <div  class="w3-container w3-quarter" id="st">
      <h2 id="st"><input class="w3-round-large w3-margin" id="inputer" type="radio" name="check" value="yes"  onclick="document.getElementById('main').style.display = 'block'">
        First Time Mother
      </h2> 
    </div>
    <div class="w3-container w3-quarter">
      <h2 id="st"><input class="w3-round-large w3-margin" id="inputer" type="radio" name="check" value="no" checked

        onclick="document.getElementById('main').style.display = 'none'">Not First Time </h2> 
    </div>
   
 
</div>

<form action="mother.php" method="Post">
  <div id="main" class="w3-row" style="margin:0px 16px;display:none">
    <div class=" w3-container w3-quarter" >
      <h2 id="st">First Name/ पहला नाम</h2> 
    </div>
    <div class="w3-container w3-quarter">
      <h2><input class="w3-round-large w3-margin" id="inputer" type="text" name="name" ></h2> 
    </div>
    <div class="w3-container w3-quarter">
      <h2 id="st">Last Name/ अंतिम नाम</h2>
    </div>
    <div class="w3-container w3-quarter">
      <h2><input class="w3-round-large w3-margin" id="inputer" type="text" name="lname"></h2> 
    </div>


    <div class="w3-row" >
    <div class=" w3-container w3-quarter" >
      <h2 id="st">Aadhar Number /आधार </h2> 
    </div>
    <div class="w3-container w3-quarter">
      <h2><input class="w3-round-large w3-margin"id="inputer" type="text" name="adhar_no"></h2> 
    </div>
    <div class="w3-container w3-quarter">
      <h2 id="st">Spouse Name/ पति नाम</h2>
    </div>
    <div class="w3-container w3-quarter">
      <h2><input class="w3-round-large w3-margin" id="inputer" type="text" name="spouse"></h2> 
    </div>
  </div>


  <div class="w3-row" >
    <div class=" w3-container w3-quarter" >
      <h2 id="st">Address/ पता</h2> 
    </div>
    <div class="w3-container w3-quarter">
      <h2><input class="w3-round-large w3-margin" id="inputer" type="text" name="address"></h2> 
    </div>
    <div class="w3-container w3-quarter">
      <h2 id="st">Village/ गाँव</h2>
    </div>
    <div class="w3-container w3-quarter">
      <h2><input class="w3-round-large w3-margin" id="inputer" type="text" name="village"></h2> 
    </div>
  </div>



  <div class="w3-row" >
    <div class=" w3-container w3-quarter" >
      <h2 id="st">State/ राज्य</h2> 
    </div>
    <div class="w3-container w3-quarter">
      <h2><select class="w3-round-large w3-margin" id="inputer" name="state">
           <option value="" disabled selected></option>
           <option value="1">Andhra Pradesh </option>
           <option value="2">Arunachal Pradesh </option>
           <option value="3">Assam</option>
           <option value="4">Bihar</option>
           <option value="5">Chhattisgarh</option>
           <option value="6">Goa</option>
           <option value="7">Gujarat</option>
           <option value="8">Haryana</option>
           <option value="9">Himachal Pradesh</option>
           <option value="10">Jammu &amp; Kashmir</option>
           <option value="11">Jharkhand</option>
           <option value="12">Karnataka </option>
           <option value="13">Kerala </option>
           <option value="14">Madhya Pradesh</option>
           <option value="15">Maharashtra</option>
           <option value="16">Manipur</option>
           <option value="17">Meghalaya </option>
           <option value="18">Mizoram</option>
           <option value="19">Nagaland</option>
           <option value="20">Odisha</option>
           <option value="21">Punjab</option>
           <option value="22">Rajasthan</option>
           <option value="23">Sikkim</option>
           <option value="24">Tamil Nadu</option>
           <option value="25">Telangana</option>
           <option value="26">Tripura</option>
           <option value="27">Uttarakhand</option>
           <option value="28">Uttar Pradesh</option>
           <option value="29">West Bengal</option>

          </select></h2> 
    </div>
    <div class="w3-container w3-quarter">
      <h2 id="st">Locality/ इलाका</h2>
    </div>
    <div class="w3-container w3-quarter">
      <h2><input class="w3-round-large w3-margin" id="inputer" type="text" name="locality"></h2> 
    </div>
  </div>



  <div class="w3-row" >
    <div class=" w3-container w3-quarter" >
      <h2 id="st">DOB/ जन्म की तारीख</h2> 
    </div>
    <div class="w3-container w3-quarter">
      <h2><input class="w3-round-large w3-margin" id="inputer" type="Date" name="DOB"></h2> 
    </div>
    <div class="w3-container w3-quarter">
      <h2 id="st">Phone Number/ फ़ोन </h2>
    </div>
    <div class="w3-container w3-quarter">
      <h2><input class="w3-round-large w3-margin" id="inputer" type="phno" name="phone"></h2> 
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





<div class="w3-container" style="background-color:#FFF9DF;margin:0px 15px 0px 15px;color:#952551;font-family:Klee;">
     <br><br><br>
     <span class="w3-xlarge"><div class="w3-center w3-xxxlarge" style="font-family:Toppan Bunkyu Midashi Gothic;">Pregnancy Details</div></span>






<form action="pregnancy.php" method="Post"><br>




     <div id="main" class="w3-row" style="margin:0px 16px;">
       <div class="w3-row" >
    <div class=" w3-container w3-quarter" >
      <h2 id="st">Mothers Name/ मां </h2> 
    </div>
    <div class="w3-container w3-quarter">
      <h2><input class="w3-round-large w3-margin" id="inputer2" type="text" name="name" ></h2> 
    </div>
    <div class="w3-container w3-quarter">
      <h2 id="st">Adhar Number/ 
आधार</h2>
    </div>
    <div class="w3-container w3-quarter">
      <h2><input class="w3-round-large w3-margin" id="inputer2" type="text" name="adhar_no"></h2> 
    </div>
  </div>




<div class="w3-row" >
    <div class=" w3-container w3-quarter" >
      <h2 id="st">Date Of Conception/ गर्भ धारण</h2> 
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
      <h2><input class="w3-round-large w3-margin" id=" ck" type="Date" name="con"  max='2017-10-03' style="background-color:#FFF9DF;
  font-size: 22px;
  border: 2px solid #FFF9DF;
  color:#952551;border-color:#253657;"></h2> 
    </div>
    <div class="w3-container w3-quarter">

      <script type="text/javascript">

        //var d=document.getElementById('ck');
        

      </script>


      <h2 id="st">Comment/ टिप्पणी</h2>
    </div>
    <div class="w3-container w3-quarter">
      <h2 ><textarea class="w3-round-large w3-margin" id="inputer2"  name="comment"></textarea></h2> 
    </div>
  </div>


    <div style="margin:0px 40%" class="w3-jumbo">
 <input class="w3-round-large w3-margin w3-padding w3-xxlarge" style="background-color:#952551;
  font-size: 22px;
  border: 2px solid #FFF9DF;
  color:#FFF9DF;" type="submit" value="Insert Details">
    
  </div>



  </div>
</form>
    <br><br><br><br><br><br>
</div>






<!-- Footer -->

<div class="w3-container w3-padding-32  w3-center" style="background-color:#253657;margin:0px 15px">
  
  <a href="#" class="w3-button  btn w3-round-large w3-margin" style="background-color:#253657;font-size: 22px;border: 2px solid #FFF9DF;color:#FFF9DF;"><i class="fa fa-arrow-up w3-margin-right"></i>.     To the top</a>
  
</div>



</body>
</html>
