<?php
if(isset($_POST['submit']))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	// sql to create table
	$sql = "INSERT INTO register (username, password, email)
	VALUES ('".$_POST['username']."', '".$_POST['roll_number']."', '".$_POST['password']."')";
?>
<?php
	if ($conn->query($sql) === TRUE) {
		echo "<div class='alert alert-success'>New record created successfully</div>";
	} else {
		echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error."<div>";
	}


	$conn->close();
}
?>