<?php


include('connection.php');
	    $delete=$_GET['delete'];
	       
	    $SQL="DELETE from user_ where ID = '$delete'";
	    
	    $result=mysqli_query($conn,$SQL);
	    if($result){
	    	echo "<script>alert('Success Deleted.')</script>";
        	echo "<script> location.href='Admin_contact.php'; </script>";
	    }else{
	    	echo "<script>alert('Fail Deleted.')</script>";
        	echo "<script> location.href='Admin_contact.php'; </script>";
	    }
	    
        mysqli_close($conn);

?>