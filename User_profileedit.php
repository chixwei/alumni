<?php
session_start();
include('connection.php');
if (isset($_SESSION['ID'])) {

$name=$_SESSION['name'];
$sql = "SELECT ID, Uname, Nick, Email, Tel, Upassword, Address, Job, Profile, Gender, DOB, Edu, Fax, Company FROM user_ WHERE Uname = '$name'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

?>



<!DOCTYPE html>
<html>
<head>
    <style>
        html {
            height: 100%;
        }
        body {
            margin:0;
            padding:0;
            font-family: sans-serif;
            background: linear-gradient(#e6b800, #ffeb99);
        }

        .login-box {
            position: absolute;
            top: 70%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0,0,0,.5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0,0,.6);
            border-radius: 10px;
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }
        .login-box .user-box label {
            position: absolute;
            top:0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus ~ label,
        .login-box .user-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: black;
            font-weight:bold;
            font-size: 14px;
        }

        .login-box form a {
            position: relative;
            display: inline-block;
            padding: 3px 3px;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px
        }

        .login-box form .btn{
            background:rgba(245, 208, 89, 0.863);
            padding: 10px 20px;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            letter-spacing: 4px
        }

        .login-box a .btn:hover {
            background: rgb(255, 180, 67);;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgb(251, 255, 9),
                        0 0 25px rgb(251, 255, 9),
                        0 0 50px rgb(251, 255, 9),
                        0 0 100px rgb(251, 255, 9);
        }

        .login-box a span {
            position: absolute;
            display: block;
        }

        .login-box a span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #fab319);
            animation: btn-anim1 1s linear infinite;
        }

        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }
            50%,100% {
                left: 100%;
            }
        }

        .login-box a span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #fab319);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s
        }

        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }
            50%,100% {
                top: 100%;
            }
        }

        .login-box a span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #fab319);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s
        }

        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }
            50%,100% {
                right: 100%;
            }
        }

        .login-box a span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #fab319);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s
        }

        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }
            50%,100% {
                bottom: 100%;
            }
        }

        

    </style>
</head>
<body>

    <div class="login-box">
    <h2>Update Contact</h2>
    <?php
    while($row = mysqli_fetch_array($result)) {
    ?>
        <form action="User_profileedit.php" method="POST" name="updateform" enctype="multipart/form-data">
            
            <input type="hidden" name="ID" value="<?= $row["ID"]; ?>"></input>
            
            <div class="user-box">
            <input type="file" name="Profile" value="<?= $row['Profile']; ?>">
            <label>Profile picture</label>
            </div>

            <div class="user-box">
            <input type="text" name="Uname" value="<?= $row["Uname"] ?>">
            <label>Name</label>
            </div>

            <div class="user-box">
            <input type="text" name="Nick" value="<?= $row["Nick"] ?>">
            <label>Nickname</label>
            </div>

            <div class="user-box">
            <input type="text" name="Email" value="<?= $row["Email"] ?>">
            <label>Email</label>
            </div>

            <div class="user-box">
            <input type="text" name="Tel" value="<?= $row["Tel"] ?>">
            <label>Phone</label>
            </div>

            <div class="user-box">
            <input type="text" name="Address" value="<?= $row["Address"] ?>">
            <label>Address</label>
            </div>

            <div class="user-box">
            <input type="text" name="Job" value="<?= $row["Job"] ?>">
            <label>Job</label>
            </div>

            <div class="user-box">
            <input type="text" name="Gender" value="<?= $row["Gender"] ?>">
            <label>Gender</label>
            </div>

            <div class="user-box">
            <input type="text" name="DOB" value="<?= $row["DOB"] ?>">
            <label>Date of Birthday</label>
            </div>

            <div class="user-box">
            <input type="text" name="Edu" value="<?= $row["Edu"] ?>">
            <label>Education</label>
            </div>

            <div class="user-box">
            <input type="text" name="Fax" value="<?= $row["Fax"] ?>">
            <label>Fax Number</label>
            </div>

            <div class="user-box">
            <input type="text" name="Company" value="<?=$row["Company"] ?>">
            <label>Company</label>
            </div>

            <a href="#">
            
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <input type="submit" class="btn" name="update" value="update">
            
            </a>

    </form>
    </div>
<?php
        }
    }
}
?>

</body>
</html>

<?php 
  
    if(isset($_POST['update'])){
    $id = $_POST['ID'];
    $name = $_POST['Uname'];
    $nick= $_POST["Nick"];
    $email = $_POST['Email'];
    $phone = $_POST['Tel'];
    $address = $_POST['Address'];
    $job = $_POST['Job'];
    $profile = $_FILES['Profile']['name'];
    $gender= $_POST["Gender"];
    $DOB= $_POST["DOB"];
    $edu= $_POST["Edu"];
    $fax= $_POST["Fax"];
    $company= $_POST["Company"];

$sql= "UPDATE user_ SET Uname = '$name', Nick = '$nick', Email = '$email', Tel = '$phone', Address = '$address', Job = '$job', Profile = '$profile', Gender = '$gender', DOB = '$DOB', Edu = '$edu', Fax = '$fax', Company = '$company' WHERE Uname = '$name' ";
$results = mysqli_query($conn, $sql);

    if($results) {
        $_SESSION['ID']= $id;
        $_SESSION['name']= $name;
        $_SESSION['nickname']= $nick;
        $_SESSION['email']= $email;
        $_SESSION['phone']= $phone;
        $_SESSION['address']= $address;
        $_SESSION['job']= $job;
        $_SESSION['profile']= $profile;
        $_SESSION['gender']= $gender;
        $_SESSION['birth']= $DOB;
        $_SESSION['edu']= $edu;
        $_SESSION['fax']= $fax;
        $_SESSION['company']= $company;


        echo "<script>alert('Data is updated.')</script>";
        echo "<script> location.href='User_profile.php'; </script>";
        
    }else {
        echo "<script>alert('Data is NOT updated.')</script>";
        echo "<script> location.href='User_profile.php'; </script>";
    
    }
    
} 

?>

