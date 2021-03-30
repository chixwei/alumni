<?php
include("connection.php"); 

$sql = "SELECT Uname FROM user_";

$results = mysqli_query($conn, $sql);

if(mysqli_num_rows($results) > 0){

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
      font-family: "Monaco";
    }

    * {
      box-sizing: border-box;
      padding:30px;
    }

    body {
        background-size: 200% 100% !important;
        animation: move 10s ease infinite;
        transform: translate3d(0, 0, 0);
        background: linear-gradient(45deg, #F9EDD6  40%, #8FBDB7 60%);
        height: 100vh
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
      width: 80%;
      padding: 10px 120px;
      text-align: center;
    }

    h1{
      font-size:60px;
      color: #F2E3CC;
    }

    @keyframes move {
        0% {
            background-position: 0 0
        }
        50% {
            background-position: 100% 0
        }
        100% {
            background-position: 0 0
        }
    }

</style>
</head>
<body>

<div class="bg-image"></div>
<div class="bg-text">
  <h1 >Dear <?php echo $name?>,</h1>
  <h2 style="font-size:40px">Thanks for believing our website and stay with us. We have successfully received your registration and your basic information.
It might take a few minutes to get the approvement from our admin team, so stay tunned!!!</h2>
</div>

</body>
</html>