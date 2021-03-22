<?php
include("connection.php"); 

//write query to retrive data

$sql = "SELECT Uname FROM user_";

//make query and get results

$results = mysqli_query($conn, $sql);

if(mysqli_num_rows($results) > 0){
    //output data of each row
    while($data = mysqli_fetch_array($results)){ 
      $name= $data["Uname"];
    } 
} 
  else {
      echo "0 results";
}
?> 



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: "Trebuchet MS", sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("../picture/grad.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}


</style>
</head>
<body>

<div class="bg-image"></div>
<div class="bg-text">
  <h1 style="font-size:55px">Dear <?php echo $name?>,</h1>
  <h2 style="font-size:35px">Thanks for believing our website and stay with us.We have successfully received your registration and your basic information.
It might take a few minutes to get the approvement from our admin team, so stay tunned!!!</h2>
</div>

</body>
</html>