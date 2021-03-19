<?php

include("connection.php");
if(isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $password=$_POST["password"];
    $sql= "SELECT AdminUname,AdminPswd FROM admin_ WHERE AdminUname='$name' ";
    $sql2= "SELECT AdminUname,AdminPswd FROM admin_ WHERE AdminPswd='$password' ";
    $results= mysqli_query($conn,$sql);
    $results2= mysqli_query($conn,$sql2);
    if(mysqli_num_rows($results)>0 and mysqli_num_rows($results2)>0){
        $row = mysqli_fetch_array($results);
        $row2 = mysqli_fetch_array($results2);

        if ($row["AdminPswd"]==$row2["AdminPswd"]){
            echo "<script> location.href='about.php'; </script>";
            exit;
        } else {
            echo '<script type="text/javascript"> window.onload=function(){alert("Incorrect Username or Password!");} </script>';
        }
    } else {
        echo '<script type="text/javascript"> window.onload=function(){alert("Incorrect Username or Password!");} </script>';
    }

        $name =$password ="" ;
}


?>

<!DOCTYPE html> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="adminstyle.css">
<body>
<div style="max-width:1100px">
  <img class="left" src="../picture/school2.jpg">
  </div>


<div class="right">

<p class="sign" text-align="center">Admin Login</p><br><br><br>

<form action="admin.php" method="post">
<form class="form1">

  <input type="text" class="un" placeholder="Username" name="name"></input>

  <input type="password" class="pass" placeholder="Password" name="password"></input>

  <input type="submit" class="submit" value="Login" name="submit"><br></input>


<p class="forgot"><b> Back to login </b><a href="login.php">Click here to login </a>.</p>
            
</div>
     
</body>

</html>