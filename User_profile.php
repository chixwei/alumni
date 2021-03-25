<?php
include('connection.php');
if (isset($_GET['edit'])) {
$edit= $GET['edit'];
$sql = "SELECT ID, Uname, Email, Tel, Upassword, Address, Job, Profile, Gender, Nick, DOB, Edu, Fax, Company FROM user WHERE ID = '$edit'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_array($result)) {
    $name= $row["Uname"];
    $email= $row["Email"];
    $phone= $row["Tel"];
    $address= $row["Address"];
    $job= $row["Job"];
    $profile=$row["Profile"];
    $gender=$row["Gender"];
    $nick=$row["Nick"];
    $DOB=$row["DOB"];
    $edu=$row["Edu"];
    $fax=$row["Fax"];
    $company=$row["Company"];

}
mysqli_close($conn);
}
}
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Profile</title>
<style>

* {box-sizing: border-box;}

body { 
    margin: 0;
    padding; 0;
    background-color: RGB(255, 237, 173);
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
    background-color: lightgrey;
    color: white;
    }

#navbar-right {
    float: right;
    }

.leftcolumn {   
    float: left;
    width: 50%;
    }

.rightcolumn {
    float: left;
    width: 50%;
    padding-left: 15px;
    }

.fakeimg {
    background-color: lightgrey;
    width: 100%;
    padding: 5px;
    }

.card {
    background-color: grey;
    padding: 30px;
    margin-top: 20px;
    }

.row:after {
    content: "";
    display: table;
    clear: both;
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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<header>
    <img src='../picture/uni0.png' width='100%'>
</header>

<table>

<div class="row">
    <div class="leftcolumn">
        <div class="card">
            <h3>Basic Information</h3>
                <div class="fakeimg" style="height:125px;">
                    
                 
                    <!-- <input type="text" name="Uname" value=<?php echo $row['Uname']?>>
            Full Nam -->
                    <p>Email Address: <?php echo $row['Email']?></p>
                </div>
        </div>

        <div class="card">
            <h3>Additional Information</h3>
                <div class="fakeimg" style="height:325px;">
                    <p>Gender: <?php echo $row['Gender']?></p>
                    <br>
                    <p>Other Name/Nickname: <?php echo $row['Nick']?></p>
                    <br>
                    <p>Date of Birthday: <?php echo $row['DOB']?></p>
                    <br>
                    <p>Education Level: <?php echo $row['Edu']?></p>
                    <br>
                    <p>Website: <?php echo $row['Website']?></p>
                </div>
        </div>
    </div>

    <div class="rightcolumn">
        <div class="card">
            <h3>System Settings</h3>
                <div class="fakeimg" style="height:125px;">
                    <p>Language: System Default (English (United States))</p>
                    <br>
                    <p>Privacy Setting: Only instructors can view my profile information</p>
                </div>
        </div>

        <div class="card">
            <h3>Contact Information</h3>
                <div class="fakeimg" style="height:200px;">
                    <p>Mailling Address: MALAYSIA</p>
                    <br>
                    <p>Phone Number: <?php echo $row['Tel']?></p>
                    <br>
                    <p>Address: <?php echo $row['Address']?></p>
        </div>
    </div>

        <div class="card">
            <h3>Job Information</h3>
            <div class="fakeimg" style="height:130px;">
                    <p>Company: <?php echo $row['Company']?></p>
                    <br>
                    <p>Occupation: <?php echo $row['Job']?> </p>
            </div>
        </div>
</div>

</table>

<div class="footer">
    <p style="color:white;">© 2021 KAWEIEE UNIVERSITY | Privacy Policy</p>
</div>



</body>
</html>