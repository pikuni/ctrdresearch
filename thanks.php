<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title>Contact Us | Council for Tribal and Rural Development</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<link rel="shortcut icon" href="images/favicon.ico" /> 
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<!--[if (gte IE 6)&(lte IE 8)]>
<script type="text/javascript" src="js/html5.js"></script>
<script type="text/javascript" src="js/selectivizr-min.js"></script>
<link rel="stylesheet" href="css/ie_7.css" type="text/css" />
<![endif]-->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/all-in-one-min.js"></script>
<script type="text/javascript" src="js/setup.js"></script>
<script type="text/javascript" src="js/main.js"></script>



<script type="text/javascript">
$(window).load(function(){
	$('#demo-side-bar').removeAttr('style');
});
</script>

<style type="text/css">
.demobar{display:none;}
#demo-side-bar{top:53px!important;left:90%!important;display:block!important;}
</style>
 <!--Dynamically creates ads markup-->
   
	<!-- Header -->
	<div class="header-main" id="main-header"></div>
		<!-- /Header -->
	
	<div class="clear"></div>
	
	<!-- Slider -->
	<div class="bannerbg-inner" id="banner-inner"></div>
	<!-- /Slider -->
	
	<div class="clear padding40"></div>

	<!-- START CONTENT -->
   <section class="container clearfix">
					
		<!-- /Page Title -->

	<div id="container_curve">
<section class="container clearfix">
		<!-- Page Title -->
			<header class="container page_info clearfix">
				
					<h3 class="title bottom_line" style="margin: 15px;">Contact Us                    
                    </h3>
				
				<div class="clear"></div>
			</header>
			
		<!-- /Page Title -->
		
		
		<div class="container">
			<!-- CATEGORY FILTER -->
			 <section class="container clearfix">
		<!-- START PAGE INFO -->
		
		<!-- END PAGE INFO -->
		
		<div class="padding15"></div>


        <?=$_POST['T1'] ?>
      
		
		<div class="clear padding20"></div>
	
		
	</section>
			<!-- END CATEGORY FILTER -->
		</div>
		
		
		
		
		
	</section>
        
  <section class="container clearfix">     
</div>
		
	</section>
		
    <!-- END CONTENT -->
		
	
	<!-- footer -->
	<div class="footer" id="footer-pg"></div>
        </div>
    </div>
    <!--wrapper end-->
	<!--Dynamically creates analytics markup-->
	 
</body>
</html>
<?php 


// To Be Update
$phno=$_POST['T3'] . "-" . $_POST['T4'] . "-" . $_POST['T5'];

$message="<table border='0' width='60%' cellspacing='0' cellpadding='0'>
	<tr>
		<td width='20%' height='20'><b><font face='Verdana' size='1'>Full Name</font></b></td>
		<td width='2%' height='20'><font face='Verdana' size='1'><b>:</b></font></td>
		<td width='38%' height='20'><font face='Verdana' size='1'>". $_POST['T1'] ."</font></td>
	</tr>
	<tr>
		<td width='20%' height='20'><b><font face='Verdana' size='1'>Email Address</font></b></td>
		<td width='2%' height='20'><font face='Verdana' size='1'><b>:</b></font></td>
		<td width='38%' height='20'><font face='Verdana' size='1'>". $_POST['email'] ."</font></td>
	</tr>
	<tr>
		<td width='20%' height='20'><b><font face='Verdana' size='1'>Phone Number</font></b></td>
		<td width='2%' height='20'><font face='Verdana' size='1'><b>:</b></font></td>
		<td width='38%' height='20'><font face='Verdana' size='1'>" . $phno . "</font></td>
	</tr>
	<tr>
		<td width='20%' height='20'><b><font face='Verdana' size='1'>Location</font></b></td>
		<td width='2%' height='20'><font face='Verdana' size='1'><b>:</b></font></td>
		<td width='38%' height='20'><font face='Verdana' size='1'>". $_POST['C11'] ."</font></td>
	</tr>
	<tr>
		<td width='20%' height='20'><b><font face='Verdana' size='1'>Message</font></b></td>
		<td width='2%' height='20'><font face='Verdana' size='1'><b>:</b></font></td>
		<td width='38%' height='20'><font face='Verdana' size='1'>". $_POST['S2'] ."</font></td>
	</tr>
</table>";

 include("class.Email.php");  

//** establish to,from, and any other recipiants.

  $Sender = $_POST['email'];
  $Recipiant = "nayan11th@gmail.com";
  

 //$Cc = "supportdesizn@gmail.com";
  //$Bcc = "nayan11th@gmail.com";


//** !!!! SEND AN HTML EMAIL w/ATTACHMENT !!!!
//** create the new message using the to, from, and email subject.

  $msg = new Email($Recipiant, $Sender, "Test mail"); 
  //$msg->Cc = $Cc;
  //$msg->Bcc = $Bcc;

//** set the message to be text only and set the email content.
  $htmlVersion="$message";
  $msg->TextOnly = false;
  $msg->Content = $htmlVersion;
  

//** send the email message.
 //print $message;
 $SendSuccess = $msg->Send();

?> 