<?php
include("connection.php"); 

//write query to retrive data

$sql = "SELECT Uname,Email,Tel,Upassword FROM user_ WHERE Status_ =''";

//make query and get results

$results = mysqli_query($conn, $sql);

if(mysqli_num_rows($results) > 0){
    //output data of each row?>
    
<?php
if (isset($_POST['approve'])) {


    $username= $_POST['username'];		
		$sql1 = "UPDATE user_ SET Status_ = 'approved' WHERE Uname = '$username'";
    //$results1 = mysqli_query($conn,$sql1);

    if(mysqli_query($conn,$sql1)){
      echo "<script> alert('Approved.') </script>";
      echo "<script> location.href='about.php'; </script>";
    }
    else{
      echo "<script> alert('Failed to register.') </script>";
      echo "<script> location.href='approve.php'; </script>";
    }

} 
?>

<?php
if (isset($_POST['reject']))  {
    
    $username= $_POST['username'];
		$sql2 = "DELETE FROM user_ WHERE Uname = '$username'";
    //$results2 = mysqli_query($conn,$sql2);
	
    if(mysqli_query($conn,$sql2)){
      echo "<script> alert('Rejected.') </script>";
      echo "<script> location.href='about.php'; </script>";
    }
    else{
      echo "<script> alert('failed to reject.') </script>";
      echo "<script> location.href='approve.php'; </script>";
    }

}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

*{
  padding:0;
  margin:0;
}
body{    
    background-image: url('picture/approve4.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
  margin-top:160px;
}

#navbar {
            overflow: hidden;
            background-color: #C99738;
            padding: 40px 20px;
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

.card {
  box-shadow: 0 4px 8px 0 black;
  transition: 0.3s;
  width: 400px;
  height:500px;
  margin-left:500px;
  background-color:#EDEFE8;
  border-radius:20px;
  margin-bottom:10px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 30px;
}

.button {
  border-radius: 8px;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 10px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #175043;
}

.button1:hover {
  background-color: #175043;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #7D0000;
}

.button2:hover {
  background-color: #7D0000;
  color: white;
}


h3{
  font-family: "Monaco";
  font-size:22px;
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
<body>
<div id="navbar">
        <a href="" id="logo">KAWEIEE <br> UNIVERSITY</a>
            <div id="navbar-right">
                <br>
                <a href="home.php">HOME</a>
                <a href="Admin_about.php">ABOUT US</a>
                <a href="Admin_event.php">NEWS & EVENTS</a>
                <a href="Admin_contact.php">CONTACT</a>
                <a href="Admin_approve.php">APPROVE</a>
                <a href="home.php">LOG OUT</a>
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

<?php //while($data = mysqli_fetch_array($results)){ 
  while($row= mysqli_fetch_array($results)) {?>

<br><br><br><br>
<div class="card">
  <div class="container">
  <img src="picture/approve.png"  width="250px" height="250px">
  <form action="Admin_approve.php" method="POST">

  <h3>Name:  <?php echo $row['Uname']?></h3>
  <input type="hidden" name="username" value="<?php echo $row["Uname"]?>"/><br>

  <h3>Email:  <?php echo $row['Email']?></h3><br>

    <h3>Phone Number:  <?php echo $row['Tel']?></h3><br>

    <h3>Password:  <?php echo $row['Upassword']?></h3><br>
    
    
    <button class="button button1" name="approve">Approve</button>
    <button class="button button2" name="reject" >Reject</button>
    </form> 
  </div>
</div>
</body>
</html> 


 <?php    // $name= $data["Uname"];$email= $data["Email"]; $tel= $data["Tel"]; $password= $data["Upassword"];
    } 
} 
  else {
      echo "0 results";
}
?>