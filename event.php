<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About Us</title>
<style>

* {box-sizing: border-box;}

body { 
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;;
    }

#navbar {
    overflow: hidden;
    background-color: RGB(16, 58, 99);
    padding: 40px 10px;
    transition: 0.4s;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 99;
    }

#navbar a {
    float: left;
    color: white;
    text-align: center;
    padding: 14px;
    text-decoration: none;
    font-size: 21px; 
    line-height: 25px;
    border-radius: 8px;
    }

#navbar #logo {
    font-size: 35px;
    font-weight: bold;
    transition: 0.4s;
    }

#navbar a:hover {
    background-color: #ddd;
    color: black;
    }

#navbar a.active {
    background-color: dodgerblue;
    color: white;
    }

#navbar-right {
    float: right;
    }

.footer {
    padding: 15px;
    text-align: center;
    background: RGB(16, 58, 99);
    margin-top: 15px;
    }

@media screen and (max-width: 580px) {
  #navbar {
    padding: 20px 10px !important;
    }
  #navbar a {
    float: none;
    display: block;
    text-align: left;
    }
  #navbar-right {
    float: none;
    }
 }

</style>
</head>
<body>

<div id="navbar">
    <a href="" id="logo">KAWEIEE <br> UNIVERSITY</a>
        <div id="navbar-right">
            <br>
            <a href="home.php">HOME</a>
            <a href="about.php">ABOUT US</a>
            <a href="event.php">NEWS & EVENTS</a>
            <a href="contact.php">CONTACT</a>
            <a href="login.php">LOG OUT</a>
            </div>
    </div>

    <br><br><br><br><br><br><br>

<div class="row">
    <div class="leftcolumn">
            <img src='uni.png' width='100%'>
        </div>

    <p>#<p>
    <p>#<p>
    <p>#<p>
    <p>#<p>
    <p>#<p>
    <p>#<p>
    <p>#<p>
    <p>#<p>
    <p>#<p>
    <p>#<p>
    <p>#<p>
    <p>#<p>
    <p>#<p>
    <p>#<p>
    <p>#<p>

    </div>

<div class="footer">
    <p style="color:white;">© 2021 KAWEIEE UNIVERSITY | Privacy Policy</p>
</div>

<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("navbar").style.padding = "10px 10px";
    document.getElementById("logo").style.fontSize = "25px";
    } else {
    document.getElementById("navbar").style.padding = "40px 10px";
    document.getElementById("logo").style.fontSize = "30px";
    }
}
</script>

</body>
</html>