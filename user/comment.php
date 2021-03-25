<?php
include("connection.php"); 

//write query to retrive data

$sql = "SELECT Uname,Comment FROM comment_";

//make query and get results

$results = mysqli_query($conn, $sql);

if(mysqli_num_rows($results) > 0){
    //output data of each row
    while($data = mysqli_fetch_array($results)){ 
      $name= $data["Uname"];
      $comment= $data["Comment"];
    } 
} 
  else {
      echo "0 results";
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Comment</title>
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

body { 
    margin: 0;
    padding; 0;
    background-color: #E5C184;
    font-family: Arial, Helvetica, sans-serif;
    }

#navbar {
    overflow: hidden;
    background-color: #C99738;
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
    background: #C99738;
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

.wrapper {
    margin-top: 0;
    }

.wrapper h1 {
    font-family: 'Arial';
    font-size: 40px;
    margin-bottom: 10px;
    text-align: center;
    }

.box {
    display: flex;
    justify-content: center;
    width: auto;
    text-align: center;
    flex-wrap: wrap;
    }

.box .box1 {
    background:  #F1D7A6;
    margin: 5px;
    margin-bottom: 50px;
    width: 300px;
    padding: 20px;
    line-height: 20px;
    color: black;  
    position: relative;
    }

.box .box1 h3 {
    color: RGB(46, 6, 54);
    font-size: 26px;
    margin-top: 50px;
    }

.box .box1 p.role {
    color: grey;
    margin: 12px 0;
    font-size: 12px;
    text-transform: uppercase;
    }

.box .box1 .box_img {
    position: absolute;
    top: -50px;
    left: 50%;
    transform: translateX(-50%);
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background: RGB(46, 6, 54);
    }

.box .box1 .box_img img {
    width: 120px;
    height: 120px;
    padding: 5px;
    }

.pic{
    width:900px;
    height:400px;
    vertical-align:middle;
    margin-left:300px;
    margin-top:50px;

}
</style>

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

<p>Comment: <?php echo $comment?></p>

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