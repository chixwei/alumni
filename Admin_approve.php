<?php
include("connection.php"); 

//write query to retrive data

$sql = "SELECT Uname,Email,Tel,Upassword FROM user_ WHERE status_=''";

//make query and get results

$results = mysqli_query($conn, $sql);

if(mysqli_num_rows($results) > 0){
    //output data of each row?>
    
<?php
if (isset($_POST['approve'])) {


    $username= $_POST['username'];		
		$sql1 = "UPDATE user_ SET status_ = 'approved' WHERE Uname = '$username'";
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

body{    
    background-image: url('picture/approve4.png');
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
<body>
<h2 style= margin-left:500px>Admin Approval</h2>

<?php //while($data = mysqli_fetch_array($results)){ 
  while($row= mysqli_fetch_array($results)) {?>


<div class="card">
  <div class="container">
  <img src="picture/approve.jpg" width="450px" height="300px">
  <form action="Admin_approve.php" method="POST">

  <h3>Name:  <?php echo $row['Uname']?></h3>
  <input type="hidden" name="username" value="<?php echo $row["Uname"]?>"/>

  <h3>Email:  <?php echo $row['Email']?></h3>

    <h3>Phone Number:  <?php echo $row['Tel']?></h3>

    <h3>Password:  <?php echo $row['Upassword']?></h3>
    
    
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