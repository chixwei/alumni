<?php

// include("connection.php");

$errors=array('name'=>" ",'password'=>" ");
$name = $password ="" ;

if(isset($_POST['submit'])){
    if(empty($_POST['name'])){
        $errors['name'] = "Username is required";
    }

    if(empty($_POST['password'])){
        $errors['password']= "Password is required";
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
<body>
<div style="max-width:1100px">
  <img class="left" src="school2.jpg">
  </div>


<div class="right">

<p class="sign" text-align="center">Admin Login</p><br><br><br>

<form action="admin.php" method="post">
<form class="form1">

  <input type="text" class="un" placeholder="Username" name="name" value=<?php echo $name?>></input>
  <div><?php echo $errors['name']?></div> 

  <input type="password" class="pass" placeholder="Password" name="password" value=<?php echo $password?>></input>
  <div><?php echo $errors['password']?></div> 

  <input type="submit" class="submit" value="Login" name="submit"><br></input>


<p class="forgot"><b> Back to login </b><a href="login.php">Click here to login </a>.</p>
            
</div>
     
</body>

</html>