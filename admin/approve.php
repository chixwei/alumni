<!-- <?php 
// if (isset($_POST['approve']))
// {
// 	if (is_array($_POST['approve'])) {
// 		$keys = array_keys($_POST['approve']);
// 		$id = $keys[0];
		
// 		$sql = "UPDATE `partners` SET `approved` = 1, `approved_date` = NOW() WHERE `user_id` = '$id' AND `friend_id` = {$user_info['uid']}";
// 		header("Location: " . $_SERVER['PHP_SELF'] . "?" . $_SERVER['QUERY_STRING'] );
// 	}
// }
// else if (isset($_POST['denyrequest']))
// {
// 	if (is_array($_POST['denyrequest'])) {
// 		$keys = array_keys($_POST['denyrequest']);
// 		$id = $keys[0];
		
// 		$sql = "UPDATE `partners` SET `approved` = -1, `approved_date` = NOW() WHERE `user_id` = '$id' AND `friend_id` = {$user_info['uid']}";
// 		header("Location: " . $_SERVER['PHP_SELF'] . "?" . $_SERVER['QUERY_STRING'] );
// 	}
// }

// if (isset($sql) && !empty($sql))
// {
// 	mysql_query($sql);
// }
// ?>

<?php
// include("connection.php"); //include database connection

// //write query to retrive data

// $sql = "SELECT Uname,Email,Tel,Upassword FROM user";

// //make query and get results

// $results = mysqli_query($conn, $sql);

// if(mysqli_num_rows($results) > 0){
//     //output data of each row
//     while($row = mysqli_fetch_array($results)){ //fetch the result and store as array
//         echo " Name: " . $row["Uname"] . " Email: " . $row["email"] ." Tel: " . $row["tel"] . " Password: " .$row["Upassword"] . "<br>";
//     } 
// } else {
//     echo "0 results";
// }

?> -->

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
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid red;
}

.button2:hover {
  background-color: red;
  color: white;
}

h2{
    font-size:40px;
    text-shadow:2px 2px gold;
    color:white;
}


</style>
</head>
<body>
<h2 style= margin-left:500px>Admin Approval</h2>

<div class="card">
  <div class="container">
  <img src="../picture/approve.jpg" width="450px" height="300px">
    <!-- <h4><b><?php echo $name?></b></h4> 
    <p><?php echo $email?></p> 
    <p><?php echo $tel?></p>  -->
    <!-- <p><?php echo $password?></p> -->
    <button class="button button1">Approve</button>
    <button class="button button2">Reject</button>
  </div>
</div>
</body>
</html> 