<?php
include("connection.php"); 

//write query to retrive data

$sql = "SELECT Uname,Email,Tel,Upassword FROM user_";

//make query and get results

$results = mysqli_query($conn, $sql);

if(mysqli_num_rows($results) > 0){
    //output data of each row
    while($data = mysqli_fetch_array($results)){ 
      $name= $data["Uname"];
      $email= $data["Email"];
      $tel= $data["Tel"];
      $password= $data["Upassword"];
    } 
} 
  else {
      echo "0 results";
}

// if (isset($_POST['approve']))
// {
// 	if (is_array($_POST['approve'])) {
// 		$approve = array_keys($_POST['approve']);
		
// 		$sql = "UPDATE `status` SET `approved` = approved, `approved_date` = NOW() WHERE `Uname` = '$name'";
// 	}
// }
// else if (isset($_POST['reject']))
// {
// 	if (is_array($_POST['reject'])) {
// 		$reject = array_keys($_POST['reject']);
    
// 		$sql = "DELETE FROM user_ WHERE 'Uname = '$name'";
// 	}
// }

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body{    
    background-image: url('../picture/approve4.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 520px;
  height:600px;
  margin-left:500px;
  background-color:white;
  border-radius:20px;
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
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #064C0D;
}

.button1:hover {
  background-color: #064C0D;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #AC4C53;
}

.button2:hover {
  background-color: #AC4C53;
  color: white;
}

h2{
    font-size:40px;
    text-shadow:2px 2px gold;
    color:black;
}

h3{
  font-family: "Garamond", serif;
  font-size:22px;
}


</style>
</head>
<body>
<h2 style= margin-left:500px>Admin Approval</h2>

<div class="card">
  <div class="container">
  <img src="../picture/approve.jpg" width="450px" height="300px">
  
  <h3>Name:  <?php echo $name?></h3>


  <h3>Email:  <?php echo $email?></h3>

    <h3>Phone Number:  <?php echo $tel?></h3>

    <h3>Password:  <?php echo $password?></h3>
    
    <button class="button button1" name="approve">Approve</button>
    <button class="button button2" name="reject" >Reject</button>
  </div>
</div>
</body>
</html> 
