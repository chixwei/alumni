<?php

include("connection.php");

$errors=array('fname'=>" ",'lname'=>" ",'email'=>" ",'tel'=>" ",'password'=>" ");
$fname = $lname = $email = $tel = $password ="" ;

if(isset($_POST['submit'])){
    if(empty($_POST['fname'])){
        $errors['fname'] = "First Name is required";
    } else {
        $name = $_POST['fname'];
    }

    if(empty($_POST['lname'])){
        $errors['lname'] = "Last Name is required";
    } else {
        $name = $_POST['lname'];
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
         $errors['tel']= "Please insert a valid phone number. Example: +6012345678"."<br>";
        }
    }

    if(empty($_POST['password'])){
        $errors['password']= "Password is required"."<br>";
    }

    if (!array_filter($errors)){
        echo "<script> alert('You have submitted the form')</script>";
        $fname = $lname = $email = $tel = $password ="";
    }

    if(!array_filter($errors)){

        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $tel = mysqli_real_escape_string($conn, $_POST['tel']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "INSERT INTO user(First Name,Last Name, Email, Phone Number,Password) VALUES('$fname', '$lname','$email', '$tel','$password')";

        //save to db and check
        if(mysqli_query($conn, $sql)){
            //success
            header("location:retrive.php");
        } else {
            //error
            echo "Query error: " . mysqli_error($conn); //showing the database connection error
        }
    }
}



?>
<!DOCTYPE html> 
<html>
<head>
<link rel="icon" type="image/png" href="kaweiee2.png">
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
    
    .fn {
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
    width:150px;
    float:left
    }

    .ln {
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
    margin-right: 50px;
    text-align: left;
    margin-bottom: 27px;
    font-family: Arial, Helvetica, sans-serif;
    width:150px;
    float:right;
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

    .tel {
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
    text-align: left;
    margin-bottom: 27px;
    font-family: Arial, Helvetica, sans-serif;
    }
    
   
    .fn:focus,.ln:focus, .tel:focus, .pass:focus, .email:focus{
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


    </style>
</head>

<body>
<div style="max-width:1100px">
  <img class="left" src="college.jpg ">
  </div>


<div class="right">

<img class="sign" src="Kaweiee3.png" width="300px" height="300px">

<form action="signup.php" method="post">
<form class="form1">


  <input type="text" class="fn "  placeholder="FirstName"  value=<?php echo $fname?>>
  <div><?php echo $errors['fname']?></div>

  <input type="text" class="ln "  placeholder="LastName" value=<?php echo $lname?>>
  <div><?php echo $errors['lname']?></div> 

  <input type="text" class="email"  placeholder="Email" value=<?php echo $email?>>
  <div><?php echo $errors['email']?></div> 

  <input type="text" class="tel"  placeholder="Phone Number" value=<?php echo $tel?>>
  <div><?php echo $errors['tel']?></div> 

  <input type="password" class="pass"  placeholder="Password" value=<?php echo $password?>>
  <div><?php echo $errors['password']?></div> 

  <input type= "submit" class="enter" value="Submit" name="submit"><br>

<p class="forgot"><b> Page to let Admin login </b><a href="admin.php">Click here to login </a>.</p>
            
</div>
</div>
     
</body>

</html>