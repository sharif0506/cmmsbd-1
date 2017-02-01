<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CMMS</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
		<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?php include "header.php"; 
			//session_start();
		?>
		
		<div class="container">
		  <div class="row"  id="contact" class="span12">
			  <div class="span6" style="padding-top:40px; text-align:center">
			  <br/>
				<h1 style="color:white">MAIL US</h1>
				<hr>
				 
				<form>
				  <input type="text" placeholder="Name"></input><br/>
				  <input type="text" placeholder="Mail Address"></input><br/>
				  <input type="text" placeholder="Contact Number"></input><br/>
				  <textarea placeholder="Description"></textarea><br/>
				  <button class="btn btn-success" style="height:25px; width:80px;" type="submit">Send <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
				</form>
				
			  </div>
			  <div class="span5" style="margin-top: 140px; text-align:center">
				<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDuWcxy7X79UwGbc4J_n6Jk3H3DXmrzggQ'></script><div style='overflow:hidden;height:360px;width:450px;'><div id='gmap_canvas' style='height:300px;width:400px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(23.738447000000004,90.38101230000008),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(23.738447000000004,90.38101230000008)});infowindow = new google.maps.InfoWindow({content:'<strong>Center for Men and Masculities Studies (CMMS)</strong><br>Road-1, Dhanmondi, Dhaka<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
			  </div>
		  </div>
		</div>
	<!-- /container -->
	<!--
	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/bootstrap-transition.js"></script>
	<script src="js/bootstrap-carousel.js"></script>
	<script src="js/bootstrap-alert.js"></script>
	<script src="js/bootstrap-modal.js"></script>
	<script src="js/bootstrap-dropdown.js"></script>
	<script src="js/bootstrap-scrollspy.js"></script>
	<script src="js/bootstrap-tab.js"></script>
	<script src="js/bootstrap-tooltip.js"></script>
	<script src="js/bootstrap-popover.js"></script>
	<script src="js/bootstrap-button.js"></script>
	<script src="js/bootstrap-collapse.js"></script>
	<script src="js/bootstrap-typeahead.js"></script>
	<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
	<script src="js/jquery.smooth-scroll.min.js"></script>
	<script src="js/lightbox.js"></script>
	-->

	</body>
</html>
