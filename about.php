<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    margin: 0;
    height:2000px;
    font-size: 28px;
    font-family: Arial, Helvetica, sans-serif;
}

.header {
    background-color: white;
    text-align: center;
}

#navbar {
    overflow: hidden;
    background-color: RGB(72, 161, 250);
}

#navbar a {
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 11px 22px;
    text-decoration: none;
    font-size: 17px;
}

#navbar a:hover {
    background-color: white;
    color: black;
}

#navbar a.active {
    background-color: #4CAF50;
    color: white;
}

.content {
    padding: 16px;
}

.sticky {
    position: fixed;
    top: 0;
    width: 100%;
}

.sticky + .content {
    padding-top: 60px;
}

.topnav-right {
  float: right;
}

.icon-bar {
    position: fixed;
    top: 76%;
    webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}

.icon-bar a {
    display: block;
    text-align: center;
    padding: 21px;
    transition: all 0.5s ease;
    color: white;
    font-size: 20px;
}

.icon-bar a:hover {
    background-color: #000;
}

.facebook {
    background: #3B5998;
    color: white;
}

.twitter {
    background: #55ACEE;
    color: white;
}

.google {
    background: #dd4b39;
    color: white;
}

.youtube {
    background: #bb0000;
    color: white;
}

.search {
    background: RGB(72, 161, 250);
    color: white;
}

.content {
    margin-left: 85px;
    font-size: 30px;
}


</style>
</head>
<body>

<div class="header">
    <img src="logo1.png" alt="logo1.png">
</div>

<div id="navbar">
    <a href="home.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="event.php">Event</a>
    <div class="topnav-right">
    <a href="contact.php">Contact Us</a>
    <a href="https://www.google.com/" class="search"><i class="fa fa-search"></i></a>
  </div>
</div>


<div class="icon-bar">
    <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a> 
    <a href="https://www.twitter.com/" class="twitter"><i class="fa fa-twitter"></i></a> 
    <a href="https://www.google.com/" class="google"><i class="fa fa-google"></i></a> 
    <a href="https://www.youtube.com/" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>

<div class="content">
    <h5><p><span style="color:blue;">The University</span></p></h5>
    <p>.</p>
    <p>.</p>
    <p>.</p>
    <p>.</p>
    <p>.</p>
    <p>.</p>
    <hr>
    <h5><p><span style="color:blue;">Visi & Misi</span></p></h5>
    <p>.</p>
    <p>.</p>
    <p>.</p>
    <p>.</p>
    <p>.</p>
    <p>.</p>
</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>