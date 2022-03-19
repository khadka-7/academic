<?php
$servername = "20.204.151.59";
$username = "sujan";
$password = "realpassword@@@";
$database = "proj";
$table = "devinfo";
 
$conn = mysqli_connect($servername, $username, $password, $database);
 

	 
	// Check if id is set or not, if true,
	// toggle else simply go back to the page
	if (isset($_GET['dname'])){

		 
		$dname=$_GET['dname'];

		// SQL query that sets the status to
		// 0 to indicate deactivation.
		$sql="UPDATE devinfo SET status='OFF' WHERE dname='$dname'";

		// Execute the query
		mysqli_query($conn,$sql);
	}

	 
	header('location: connect.php');
?>
