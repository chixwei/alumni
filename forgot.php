<?php
$errors=array('name'=>"",'email'=>"",'tel'=>"",'password'=>"");
$name = $name = $email = $tel = $password ="" ;

if(isset($_POST['submit'])){

    if(empty($_POST['email'])){
        $errors['email']= "Email is required"."<br>";
    }
    else{
        $email=$_POST['email'];
        if(!preg_match("/^\w+@ (hotmail ,gmail ,outlook)\.com/",$email)){
            $errors['email']= "Please insert a valid email. Example: email@hotmail.com"."<br>";
        }
}
}


?>
<!DOCTYPE html> 
<html>
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
        font-size: 25px;
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

    .submit {
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
        color: #A86CAD;
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


<form class="main">
<p class=sign>Change Password</p>
<form method="post" action="">

  <input class="email" type="text" text-align="center" placeholder="Email">

<input class="Np" type="text" text-align="center" placeholder="New Password">

<input class="Cp" type="text" text-align="center" placeholder="Confirm new Password">

  <a class="submit">Comfirm</a><br><br>

<p class="forgot"><b> Back to login page </b><a href="login.php">Click here to login </a>.</p>
            
</div>
</div>
     
</body>

</html>