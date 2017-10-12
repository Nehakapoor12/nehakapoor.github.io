 <!DOCTYPE html>
 <?php 
 $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dbb";
 
 $conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
?>
<html lang="en">
<head>
  <title>NSS YMCAUST</title> <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16"> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
   <link rel="stylesheet" href="bootstrap/css/mystyle.css" />
   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min,css" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
#menu a{
	 color:black; 
    text-decoration:none;
}
</style>
  
</head>
<body>
<div class="container">
<div class="table table-responsive">
		<table> 
			<tbody>
				<tr>
					<td>
                    	<img src="images/logo.png " class="img-rounded" width="100px" height="100px" />
                    </td>
                    <td>
                    	<div class="page-header" style="color:red"><h2><b><i>&nbsp;&nbsp;&nbsp; NSS YMCAUST </div>
                    </td>
					<td align="right"style="width: 69%;">
                    	<img src="images/ymca.png " class="img-rounded" width="100px" height="100px" />
                    </td>
                </tr>
            </tbody>
        </table>
		
    </div>
	   <!--End of Logo-->
	   <!--buttons-->
	<ul class="list-group list-inline" id="menu">
       <li class="list-group-item text-center" style="width:180px;"><a href="/project">Home</a></li>
       <li class="list-group-item text-center" style="width:180px;"><a href="/project/aboutus.php">About Us</a></li>
       <li class="list-group-item text-center dropdown" style="width:180px;">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Gallery
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
			  
			  <li style="width:180px;"><a href="/project/blood_donation.php">Blood Donation</a></li>
			  <li style="width:180px;"><a href="/project/nss.php">NSS</a></li>
			  <li style="width:180px;"><a href="/project/republic_day.php">Republic day</a></li>
			</ul>   
	   </li>
	   <li class="list-group-item text-center" style="width:180px;"><a href="/project/notifications.php">Notifications</a></li>
       <li class="list-group-item text-center" style="width:180px;"><a href="/project/contact_us.php">Contact Us</a></li>
	   <li class="list-group-item text-center" style="width:180px;"><a href="/project/Registration.php">Registration Here</a>
	   </li>
    </ul>
	<table class="table table-bordered">
    <thead>
      <tr>
        <th>Username</th>
        <th>Roll No.</th>
        <th>Blood Group</th>
        <th>Email</th>
        <th>Mobile No.</th>
      </tr>
    </thead>
    <tbody>
      <?php
		$sql = "SELECT * FROM nss";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
        echo "<tr><td> " . $row["username"]. "</td><td>" . $row["roll_no"]. "</td><td> " . $row["blood_group"]. "</td><td>". $row["email"]. "</td><td>" . $row["mobile_no"]. "</td></tr> ";
    }
} else {
    echo "0 results";
}
$conn->close();
	  
	  ?>
    </tbody>
  </table>
</div>
</body>
</html>