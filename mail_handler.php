<?php
if(isset($_POST['submit'])){

session_start();
if ($_SESSION['digit'] == $_POST["captcha"]) {
echo "Form Submitted successfully....!";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['messsage'];
	$to = "nssymcaust@gmail.com";
	$subject = "New Message";
mail ($to, $subject, $message, "From: " , $name);
echo "your Message has been sent successfully";
}
else{
	echo "your Message has not sent...";
echo $_POST["captcha"];
echo $_POST["digit"];
}
} else {
die("Wrong TEXT Entered");
}
?>