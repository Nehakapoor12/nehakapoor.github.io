<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
function_(id){ return document.getElementById(id);}
function submitForm(){
	  _("mybtn").disabled = true;
	  _("status"),innerHTML = 'please wait...';
	  var formdata = new FormData();
	  formdata.append( "n",_("n").value );
	  formdata.append( "e",_("e").value );
	  formdata.append( "m",_("m").value );
	  var ajax = new XMLHttpRequest ();
	  ajax.open( "POST", "mail_handler.php" );
	  ajax.onreadyState = function(){
	  if(ajax.readyState == 4 && ajax.status == 200){
		if(ajax.responseText == "success"){
			_("my_form").innerHTML = '<h2>Thanks '+_("n").value+',your
		}
		else{
			_(status)
		}
		}  
	  }
}

</script>
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
<div class="container bg-grey">
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
       <li class="list-group-item text-center active" style="width:180px;"><a href="/project/contact_us.php">Contact Us</a></li>
	   <li class="list-group-item text-center" style="width:180px;"><a href="/project/Registration.php">Registration Here</a>
	   </li>
    </ul>
  <h2 class="text-center">CONTACT US</h2>
  <?php if(!empty($statusMsg)){ ?>
        <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
    <?php } ?>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> YMCAUST NSS, FARIDABAD</p>
      
      <p><span class="glyphicon glyphicon-envelope"></span> nssymcaust@gmail.com</p>
      <p><span class="glyphicon glyphicon-envelope"></span> beanz2@rediffmail.com</p> 
    </div>
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-12 form-group">
		<!--<form action="mail_handler.php" method="post" name="form class="form-box">-->
         <form name="contactform" method="post" action="mail_handler.php">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text">
        </div>
		</div>
		<div class="row">
        <div class="col-sm-12 form-group"> 
          <input class="form-control" id="email" name="email" placeholder="email@example.com" type="email">
        </div>
      </div>
	  
	       <textarea class="form-control" id="message" name="messsage" placeholder="Message" rows="5"></textarea><br>
		<div class="row">
        <div class="col-sm-12 form-group"> 
          <div class='col-md-3' id="show"><img style='height:2em;' id="cap" src="captcha.php"></div>
			<div class='col-md-2'id="reload" style="text-align:center"><img src="reload.png" height="30%" width="40%"></div></br></br>
			<div class='col-md-4'><label class='text-info pull-left'>Enter Image Text: </label></div>
			<div class='col-md-2'><input id="captcha" name="captcha" type="text"></div>
        </div>
      </div>
             
			
			
      <div class="row">
        <div class="col-sm-12 form-group">
          <input class="btn btn-primary pull-right" id="button" type="submit" value="Send" name="submit"></button>
		          </div>
		</form>
      </div> 
    </div>
  </div>
</div>
</body>
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
var email = $("#email").val();
var message = $("#message").val();
var captcha = $("#captcha").val();

if (name == '' || email == '' || captcha == '' || message == '' )
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