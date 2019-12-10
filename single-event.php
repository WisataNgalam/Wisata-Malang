<?php include('admin/inc/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Event - Wisma</title>
	<link rel="icon" type="image/png" href="img/icon/bavel.png">



	<!-- Import Icon -->
  	<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">

	<!-- Import Style -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/swipe.min.css">

</head>
<body>

<nav class="navbar scrolled">
	<div class="container">
		<div class="navbar-bars">
			<a href="#" class="navbar-title sidebar-toggle" style="padding: 0;"><i class="ion-navicon-round"></i></a>
        	<a href="index.html" class="navbar-title">Bali Travel Time</a>
		</div>
		<div class="navbar-item">
			<a href="index.html" class="navbar-title" style="color: white">Bali Travel Time</a>
			<ul>
		        <li><a href="destination.php">Destination</a></li>
			    <li><a href="gallery.php">Gallery</a></li>
			    <li><a href="index.php#discover">Discover</a></li>
			    <li><a href="news.php"> News</a></li>
				<li><a href="admin/login.php">Login</a></li>
  		  	</ul>
		</div>
	</div>
</nav>
<!-- Sidebar Overlay -->
<section class="sidebar-overlay"></section>
<br>
<br>
<br>


<section id="main-content" class="clearfix">
    <div class="container">
        <hr>
        
        <?php
            $query = mysql_query("SELECT * FROM event WHERE id_event = $_GET[id]");
            if($query=== FALSE) { 
    	die(mysql_error()); 
}
            while($data = mysql_fetch_array($query)) {              
                echo "
                    <div id='blog-details'>
                        <h1>$data[event]</h1>
                        
                        
                        
                        <div id='blog-image'>
                            <img src='admin/uploads/event/$data[gambar]' alt='$data[event]'>
                        </div>
                        
                        <p>$data[isi]</p>
                    </div>
                ";
            }
        ?>
</section>
<section class="section-footer">
	<div class="texture-handler-top"></div>
	<div class="row">
		<div class="col-left">
			<p>Copyright &copy; 2019</p>
			<p>Kelompok Satu<br></p>
			<a href="https://www.facebook.com/bestbali/" target="_blank"><span class="ion-social-facebook icon-social"></span></a>
			<a href="https://www.instagram.com/explorebali/" target="_blank"><span class="ion-social-instagram icon-social"></span></a>
			<a href="https://twitter.com/hashtag/explorebali?lang=en" target="_blank"><span class="ion-social-twitter icon-social"></span></a>
		</div>
		<div class="col-right">
			<b>EXPERIENCE</b>
			<ul>
				<li><a href="#">Natural</a></li>
				<li><a href="#">Culture</a></li>
				<li><a href="#">Religi</a></li>
				<li><a href="#">Culnary</a></li>
				<li><a href="#">Adventure</a></li>
			</ul>
		</div>
		<div class="col-right">
			<b>TRAVEL GUIDE</b>
			<ul>
				<li><a href="#">Tourism Guide</a></li>
				<li><a href="#">Travel Agent</a></li>
				<li><a href="#">Accomodations</a></li>
				<li><a href="#">On Budget</a></li>
			</ul>
		</div>
		<div class="col-right">
			<b>WHAT'S HAPPEN</b>
			<ul>
				<li><a href="#">News</a></li>
				<li><a href="#">Event</a></li>
				<li><a href="#">Tips & Info</a></li>
			</ul>
		</div>
	</div>
	<div class="footer-bottom">
		<p>Programmer Gila - Created With <span class="ion-heart red"></span> to create a Lovable Website</p>
	</div>
</section>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		/* Sidebar Trigger */
		$('.sidebar-toggle').click(function(e) {
			e.preventDefault();
			$('.sidebar').addClass('active');
			$('.sidebar-overlay').css('visibility', 'visible');
		});
		$('.sidebar-overlay, .close').click(function(e) {
			e.preventDefault();
			$('.sidebar').removeClass('active');
			$('.sidebar-overlay').css('visibility', 'hidden');
		});
		$('#openLogin').click(function() {
		$('.login-overlay').fadeIn();
		$('.login-form').css({
			visibility: 'visible',
			opacity: '1'
		});
	});
	$('.close').click(function(){
		$('.login-overlay').fadeOut(1000);
		$('.login-form').css({
			visibility: 'hidden',
			opacity: '0'
		});
	});
	});
</script>
</body>
</html>