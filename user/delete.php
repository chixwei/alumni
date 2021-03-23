<?php


include('connection.php');
	    $delete=$_GET['delete'];
	       
	    $SQL="DELETE from user_ where ID = '$delete'";
	    
	    $result=mysqli_query($conn,$SQL);
	    if($result){
	    	echo "Success deleted";
	    }else{
	    	echo "Failed deleted";	

	    }
	    
        mysqli_close($conn);

?>