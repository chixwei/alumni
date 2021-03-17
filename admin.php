<?php

include("connection.php");

$Uname = $pswd = "";

$errors= array('Uname'=> "", 'pswd'=>"");

if(isset($_POST['submit'])) {
    if(empty($_POST['Uname'])) {
        $errors['Uname']= "Please enter your username.";

    }else {
        $admin= $_POST['Uname'];
    }

    if(empty($_POST['pswd'])) {
        $errors['pswd']= "Please enter your password.";
    }else {
        $adminpswd=$_POST['pswd'];
    }

    if (!array_filter($errors)){ 
        echo "<script> alert('You have submitted the form') </script>";
        $Uname= $pswd ="";
    }
}



?>


<!DOCTYPE html> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="adminstyle.css">
</head>
<body>
<div style="max-width:1100px">
  <img class="left" src="school2.jpg">
  </div>


<div class="right">

<p class="sign" text-align="center">Admin Login</p>

<form class="form1">

  <input type="text" class="un" name="Uname" text-align="center" placeholder="Username" value=<?php echo $Uname ?>>
  <div><?= $errors['Uname']?></div>

  <input type="password" class="pass" name="pswd" text-align="center" placeholder="Password" value=<?php echo $pswd ?>>
  <div><?= $errors['pswd'] ?></div>

  <input type="submit" class="submit" name="submit" value="Login"><br><br>

<p class="forgot"><b> Back to login </b><a href="login.php">Click here to login </a>.</p>
            
</div>
</div>
     
</body>

</html>