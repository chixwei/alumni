<!DOCTYPE html> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>

    .vid {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
    z-index: -2;
}


body {
        font-family: Arial, Helvetica, sans-serif;
    }
    
    .main {
        background-color: #F4F5F2;
        width: 400px;
        height: 400px;
        margin: 7em auto;
        border-radius: 1.5em;
        animation: arrive 500ms ease-in-out 0.1s forwards;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }
    
    .sign {
        text-align: center;
        padding-top: 40px;
        color: #213F84;
        text-shadow: 2px 2px #9DD4EC;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    
    .un {
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


    
    .submit {
        font-weight:bold;
      cursor: pointer;
        border-radius: 5em;
        color: #FFFFFF;
        background: linear-gradient(to right, #B19CD8, #FFCCCC);
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

@media (min-aspect-ratio: 16/9) {
    #loginBack {
        width: 100%;
        height: auto;
    }
}
@media (max-aspect-ratio: 16/9) {
    #loginBack {
        width: auto;
        height: 200%;
    }
}


@keyframes arrive {
    0% {
        opacity: 0;
        transform: translate3d(0, 50px, 0);
    }
    
    100% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }
}
    </style>
</head>

<body>

<div class="vid">
    <video autoplay muted loop id="loginBack">
    <source src="loginBack.mp4" type="video/mp4">
    </video>
</div>

<div class="main">

<p class="sign" text-align="center">Sign in</p>

<form class="form1">

  <input class="un " type="text" text-align="center" placeholder="Username">

  <input class="pass" type="password" text-align="center" placeholder="Password">

  <a class="submit">Sign in</a><br><br>

  <p class="signup"><a href="signup.php">Register</p>

  <p class="forgot"><a href=""><b> Forgot your password? </b></p>
            
</div>
     
</body>

</html>