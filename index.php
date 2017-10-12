<!DOCTYPE html>
<html lang="en">
<head>
  <title>NSS YMCAUST</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
   <link rel="stylesheet" href="bootstrap/css/mystyle.css" />
   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min,css" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {
    font-family: "Times New Roman", Times, serif;
}
#menu a{
	 color:black; 
    text-decoration:none;
}
gal:hover{
	display: block;
	position:relative;
}
// p{
    // text-align: justify;
    // text-justify: inter-word;
// }
#body{
	background-image:url(images/background_.jpg);
	background-repeat:no-repeat;
	background-attachment: fixed;
    background-position: center;
	background-position: 50% 78%;
	//background-size: 100% 100%;
	// background-size:cover;
}
</style>
  
  </head>
<body id="body">
<!-- logo-->
<?php $base_url = 'localhost/project/'?>
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
       <li class="list-group-item text-center active" style="width:180px;"><a href="/project">Home</a></li>
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
	
	
<!--imagesss-->   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li
	   ><li data-target="#myCarousel" data-slide-to="4"></li>
	   <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/IMG_9389.jpg"  style="width:1200px;height:400px">
      </div>

    
      <div class="item">
        <img src="images/IMG_20170126_091740.jpg"  style="width:1200px;height:400px">
      </div>
	  <div class="item">
        <img src="images/IMG_9492.jpg"  style="width:1200px;height:400px">
      </div>
	  
	  <div class="item">
        <img src="images/IMG_9484.jpg"  style="width:1200px;height:400px">
      </div>
	  
	  
	  <div class="item">
        <img src="images/IMG_9503.jpg"  style="width:1200px;height:400px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
 
  <script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    
	$(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
	$(".item4").click(function(){
        $("#myCarousel").carousel(4);
    });
	$(".item4").click(function(){
        $("#myCarousel").carousel(5);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>
<!-- END of images-->

<h1>Introduction </h1>
<p class="text-justify"><h4>The National Service Scheme (NSS) is an Indian government-sponsored public service program conducted by the Department of Youth Affairs and Sports of the Government of India. Popularly known as NSS, the scheme was launched in Gandhiji's Centenary year, 1969. Aimed at developing student's personality through community service, NSS is a voluntary association of young people in Colleges, Universities and at +2 level working for a campus-community linkage.</h4></p>
<p class="text-justify"><h4>After independence the University Grants Commission, headed by S. Radhakrishnan, recommended the introduction of voluntary national service in academic institutions. This idea was again considered by the Central Advisory Board of Education (CABE) at its meeting in January, 1950; after examining the idea and the experiences of other countries in this field, the board recommended that students and teachers should devote time to voluntary manual work. In the draft first Five-Year Plan adopted by the government in 1952, the need for social and labour service by Indian students for one year was stressed. In 1958 Jawaharlal Nehru, in a letter to the chief ministers, considered the idea of social service as a prerequisite for graduation. He directed the Ministry of Education to formulate a suitable scheme for the introduction of national service into academic institutions.</h4></p>
<h1>Aim</h1>
<p class="text-justify"><h4>The programme aims to inculcate social welfare in students, and to provide service to society without bias. NSS volunteers work to ensure that everyone who is needy gets help to enhance their standard of living and lead a life of dignity. In doing so, volunteers learn from people in villages how to lead a good life despite a scarcity of resources. it also provides help in natural and man-made disasters by providing food,clothing and first aid to the disaster victims.</h4></p>

</div>
<!--end of header-->
<script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>