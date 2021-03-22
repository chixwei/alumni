<?php

include("connection.php");

$name = $email = $tel = $password ="" ;

$errors=array('name'=>"",'email'=>"",'tel'=>"",'password'=>"");

if(isset($_POST['submit'])){

    if(empty($_POST['name'])){
        $errors['name'] = "Name is required";
    } else {
        $name = $_POST['name'];
    }


    if(empty($_POST['email'])){
        $errors['email'] = "Email is required";
    } else {
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Please insert a valid email. Example: email@hotmail.com";
        }
    }
    
    if(empty($_POST['tel'])){
        $errors['tel']= "Phone Number is required"."<br>";
    }
    else{
        $tel=$_POST['tel'];
        if(!preg_match("/\+60\d{9,10}/i",$tel)){
         $errors['tel']= "Please insert a valid phone number. Example: +60123456789"."<br>";
        }
    }

    if(empty($_POST['password'])){
        $errors['password']= "Password is required"."<br>";
    }else {
        $password= $_POST['password'];
    }


    if(!array_filter($errors)){

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $tel = mysqli_real_escape_string($conn, $_POST['tel']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "INSERT INTO user_(Uname, Email, Tel, Upassword) VALUES('$name', '$email', '$tel', '$password')";

        //save to db and check
        if(mysqli_query($conn, $sql)){
            //success
            header("about.php");
        } else {
            //error
            echo "Query error: " . mysqli_error($conn); //showing the database connection error
        }

        echo "<script> alert('You have submitted the form')</script>";
        $name = $email = $tel = $password ="" ;
    }
}



?>
<!DOCTYPE html> 
<html>
<head>
<link rel="icon" type="image/png" href="../picture/kaweiee2.png">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>

*{
    padding:0px;
    margin:0px;
}

body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #F3FFFA;
    }

    
    .right {
        float:right;
        background-color: #F3FFFA;
        width: 400px;
        height: 400px;  
    }
    
    .sign {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    
    
    form.form1 {
        padding-top: 40px;
    }

    .name{
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
    margin-left: 46px;
    text-align: left;
    font-family: Arial, Helvetica, sans-serif;
    }

    .email{
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
    margin-left: 46px;
    text-align: left;
    font-family: Arial, Helvetica, sans-serif;
    }
    
    .tel{
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
    margin-left: 46px;
    text-align: left;
    font-family: Arial, Helvetica, sans-serif;
    }

    .pass{
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
    margin-left: 46px;
    text-align: left;
    font-family: Arial, Helvetica, sans-serif;
    }
   
    .name:focus, .tel:focus, .email:focus, .pass:focus{
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
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
    
    @media (max-width: 700px) {
        .main {
            border-radius: 0px;
        } 
    }

    .left{
        float:left;
        width:100%;
        height:790px;
    }

    .error{
        margin-left:50px;
        color:#996515;
    }


    </style>
</head>

<body>
<div style="max-width:1100px">
  <img class="left" src="../picture/college.jpg ">
  </div>


<div class="right">

<img class="sign" src="../picture/Kaweiee3.png" width="300px" height="300px">

<form action="signup.php" method="POST">
<form class="form1">

  <input type="text" class="name" placeholder="Username" name="name" value=<?php echo $name?>></input>
  <div class="error"><?php echo $errors['name']?></div> <br>

  <input type="text" class="email" placeholder="Email" name="email"value=<?php echo $email?>></input>
  <div class="error"><?php echo $errors['email']?></div> <br>

  <input type="text" class="tel" placeholder="Phone Number" name="tel" value=<?php echo $tel?>></input>
  <div class="error"><?php echo $errors['tel']?></div> <br>

  <input type="password" class="pass" placeholder="Password" name="password" value=<?php echo $password?>></input>
  <div class="error"><?php echo $errors['password']?></div> <br>

  <input type= "submit" class="enter" value="Register" name="submit" ></a></input><br>

<p class="forgot"><b> Page to let Admin login </b><a href="admin.php">Click here to login </a>.</p>

</form>
</form>
</div>
     
</body>

</html>