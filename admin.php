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
}
?>

<!DOCTYPE html> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>

*{
    padding:0px;
    margin:0px;
}

body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #FBFBEF;
    }

    
    .right {
        float:right;
        margin-top:100px;
        background-color: #FBFBEF;
        width: 400px;
        height: 400px;  
    }
    
    .sign {
        text-align: center;
        padding-top: 40px;
        color: #EB9A2E;
        text-shadow: 2px 2px #F0DE6C;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        font-size: 35px;
    }
    
    .name {
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
    text-align: center;
    margin-bottom: 27px;
    font-family: Arial, Helvetica, sans-serif;
    }
    
    form.form1 {
        padding-top: 40px;
    }

    .pass {
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
    text-align: center;
    margin-bottom: 27px;
    font-family: Arial, Helvetica, sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
    }

    .enter {
        font-weight:bold;
      cursor: pointer;
        border-radius: 5em;
        color: #FFFFFF;
        background: linear-gradient(to right, #ECD099, #F0AF82);
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
        color: #A5782B;
        text-align: center;
    }

    .forgot a {
        text-align:right;
        color: #E3C56D;
        text-decoration: none;
    }

    .signup{
        text-align:center;
        color: #6CB0F2;
        padding-top: 0px;
        font-size: 10px;
    }
    
    a:hover{
        color: #A86CAD;
        text-decoration: none;
    }

    .left{
        float:left;
        width:100%;
        height:790px;
        align:left;
    }
    
    @media (max-width: 700px) {
        .main {
            border-radius: 0px;
        } 
    }


    </style>
</head>

<body>
<div style="max-width:1100px">
  <img class="left" src="school2.jpg">
  </div>


<div class="right">

<p class="sign" text-align="center">Admin Login</p><br><br><br>

<form action="admin.php" method="post">
<form class="form1">

  <input type="text" class="name" placeholder="Username" name="name" value=<?php echo $name?>></input>
  <div><?php echo $errors['name']?></div> 

  <input type="password" class="pass" placeholder="Password" name="password" value=<?php echo $password?>></input>
  <div><?php echo $errors['password']?></div> 

  <input type="submit" class="enter" value="Login" name="submit"><br>

<p class="forgot"><b> Back to login </b><a href="login.php">Click here to login </a>.</p>
            
</div>
</div>
     
</body>

</html>