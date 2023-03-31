<?php
$conn = mysqli_connect("localhost","root","","lms");

if($conn)
	{
		
		echo "database connection successfully";
		
	}
	else{
		echo "database connection failed";
	}

?>

