<?php

include("connection.php");
if(isset($_POST["submit"]))
   {
    
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sql= "SELECT Email,Upassword FROM user_ WHERE Email='$email'";
    $results= mysqli_query($conn,$sql);

    if(mysqli_num_rows($results)>0) {
        $row = mysqli_fetch_array($results);

        if ($row["Email"]){

            echo "<script> location.href='login.php'; </script>";
        }
        else 
        {
            echo '<script type="text/javascript"> window.onload=function(){alert("Something went wrong with your email or password.");} </script>';
        exit;
        }
        
        mysqli_close($conn);
   }
}

    $email ="";
 

?>
<?php
session_start();
include("connection.php");
if(isset($_POST["submit"])) {
    
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sql= "UPDATE user_ SET Upassword ='$password' WHERE Email='$email'";
    $results= mysqli_query($conn,$sql);
    if($results) {

        echo "<script>alert('Password had been changed.')</script>";
        // echo "<script> location.href='login.php'; </script>";
        

    }else {
        echo "<script>alert('Something went wrong.')</script>";
    }
    
    mysqli_close($conn);

} 


    $password ="";



?>


<!DOCTYPE html> 
<head>
<link rel="icon" type="image/png" href="picture/homelogo.png">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>


body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #F3FFFA;
    }

    .main {
        background-color:white;
        width: 400px;
        height: 400px;
        margin: 7em auto;
        border-radius: 1.5em;
        animation: arrive 500ms ease-in-out 0.1s forwards;
    }

    .sign {
        text-align: center;
        padding-top: 40px;
        color: black;
        text-shadow: 2px 1px lightgrey;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        font-size: 30px;
    }
    
    
    .Np {
        width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: left;
    margin-bottom: 27px;
    font-family: Arial, Helvetica, sans-serif;
    }

    .Cp {
        width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: left;
    margin-bottom: 27px;
    font-family: Arial, Helvetica, sans-serif;
    }
    
    form.form1 {
        padding-top: 40px;
    }

    .email {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: left;
    margin-bottom: 27px;
    font-family: Arial, Helvetica, sans-serif;
    }


    
    .Np:focus, .Cp:focus, .email:focus{
        border: 2px solid #B7882A !important;
        
    }

    .enter {
        font-weight:bold;
      cursor: pointer;
        border-radius: 5em;
        color: #FFFFFF;
        background: linear-gradient(to right, #98D1EA, #B9ECDA);
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: Arial, Helvetica, sans-serif;
        margin-left: 35%;
        font-size: 14px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
    
    .forgot {
        margin: 20px 0;
        font-size: 10px;
        color: #213F84;
        text-align: center;
    }

    .forgot a {
        text-align:right;
        color: #6CB0F2;
        text-decoration: none;
    }

    
    a:hover{
        color: black;
        text-decoration: none;
    }
    
    @media (max-width: 700px) {
        .main {
            border-radius: 0px;
        } 
    }



    </style>
</head>

<body>


<div class="main">
<p class="sign">Change Password</p><br><br>
<form action="forgot.php" method="POST">

  <input class="email" type="text" text-align="center" placeholder="Email" name="email">
  <!-- <input type="hidden" value="forgotpassword and login"/> -->

<input class="Np" type="password" text-align="center" placeholder="New Password" name="password">


<input type="submit" class="enter" value="Submit" name="submit">

</form>
</div>   
</body>
</html>