<?php 
$servername = "20.204.151.59";
$username = "sujan";
$password = "realpassword@@@";
$database = "proj";
$table = "devinfo";
 
$conn = mysqli_connect($servername, $username, $password, $database);
 
 
	if (isset($_GET['dname'])){

		 
		$dname=$_GET['dname'];

		// SQL query that sets the status
		// to 1 to indicate activation.
		$sql="UPDATE devinfo SET
			status='ON' WHERE dname='$dname'";

		// Execute the query
		mysqli_query($conn,$sql);
	}

	 
	header('location: connect.php');
?>
