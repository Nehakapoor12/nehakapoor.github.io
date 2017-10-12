<!--<?php
if(isset($_POST['submit']))
{
	$servername = "mysqlcluster22";
	$username = "nssymca17";
	$password = "Nsst#mca17";
	$dbname = " nssymca";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

$username = $_POST['username'];
$roll_number = $_POST['roll_number'];
$blood_group = $_POST['blood_group'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

//CAPTCHA Matching code
session_start();
if ($_SESSION['digit'] == $_POST["captcha"]) {
echo "Form Submitted successfully....!";




	// sql to create table
	$sql = "INSERT INTO nss (username, roll_no, blood_group, email, mobile_no) VALUES ('$username', '$roll_number', '$blood_group', '$email', '$mobile')";

	if ($conn->query($sql) === TRUE) {
		echo "<div class='alert alert-success'>New record created successfully</div>";
	} else {
		echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error."<div>";
	}
	$conn->close();

} else {
die("Wrong TEXT Entered");
}
}
?>-->

<html>
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	  body
{
	background-image:url(images/background_nss.jpg);
	background-repeat:no-repeat;
	background-size:cover;
}
#menu a{
	 color:black; 
    text-decoration:none;
}
</style>	  
	</head>
	<body>
		<div class='container'>
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
	   <li class="list-group-item text-center active" style="width:180px;"><a href="/project/Registration.php">Registration Here</a>
	   </li>
    </ul>
			<div class='page-header'><h3><span class='glyphicon glyphicon-user'></span> Registration Here Here </h3></div>
			<form class='form-group' method='post' action=''>
				<div class='row'>
						<div class='col-md-2'><label class='text-info pull-right' >User Name : </label></div>
						<div class='col-md-2'><input type='text' style='height:2em;' id="username" name='username' class='form-control' /></div><br>
					<div class='col-md-8'></div><br>
					<div class='col-md-2'><label class='text-info pull-right'>Roll Number : </label></div>
					<div class='col-md-2'><input type='text' style='height:2em;' id="roll" name='roll_number' class='form-control' /></div><br>
					<div class='col-md-8'></div><br>
					<div class='col-md-2'><label class='text-info pull-right'>Blood Group : </label></div>
					<div class='col-md-2'><input type='text' style='height:2em;' id="blood" name='blood_group' class='form-control' /></div><br>
					<div class='col-md-8'></div><br>
				    <div class='col-md-2'><label class='text-info pull-right'>Email : </label></div>
					<div class='col-md-2'><input type='text' style='height:2em;' id="email" name='email' class='form-control' /></div><br>
					<div class='col-md-8'></div><br>
					<div class='col-md-2'><label class='text-info pull-right'>Mobile no : </label></div>
					<div class='col-md-2'><input type='text' style='height:2em;' id="mobile" name='mobile' class='form-control' /></div>
					<div clas='col-md-8'></div><br>
					<div clas='col-md-8'></div><br>
					<div class='col-md-2'></div>
					<div class='col-md-1' id="show"><img style='height:2em;' id="cap" src="captcha.php"></div>
					<div class='col-md-2'id="reload" style="text-align:center"><img src="reload.png" height="2%" width="10%"></div>
					<div clas='col-md-8'></div><br>
					<div clas='col-md-8'></div><br>
					<div class='col-md-2'><label class='text-info pull-right'>Enter Text: </label></div>
					<div class='col-md-2'><input id="captcha" type='text' style='height:2em;' name='captcha' class='form-control' /></div>
					<div clas='col-md-8'></div><br>
					<div class='col-md-1'><br><button class='btn btn-success pull-right' type='submit' id="button" name='submit' >Submit</button></div>
					<!--<div class='col-md-1'><br><button class='btn btn-success pull-right' type='submit' id="button" name='submit' onclick='return confirm("Are you sure you want to submit ?");'>Submit</button></div>-->
				</div>
			</form>
		</div>
	</body>
</html>
<script>
$(document).ready(function() {
//change CAPTCHA on each click or on refreshing page
$("#reload").click(function() {

$("img#cap").remove();
var id = Math.random();
$('<img id="cap" src="captcha.php?id='+id+'"/>').appendTo("#show");
id ='';
});

//validation function
$('#button').click(function() {
var name = $("#username").val();
var roll_no = $("#roll").val();
var blood = $("#blodd").val();
var email = $("#email").val();
var mobile = $("#mobile").val();
var captcha = $("#captcha").val();

if (name == '' || email == '' || captcha == '' || roll_no == '' ||  blood == '' ||  mobile == '' )
{
alert("Fill All Fields");
return false;
}
else
{ //validating CAPTCHA with user input text
var dataString = 'captcha=' + captcha;
$.ajax({
type: "POST",
url: "registration.php",
data: dataString,
success: function(html) {
alert(html);
}
});
}
});
});
</script>