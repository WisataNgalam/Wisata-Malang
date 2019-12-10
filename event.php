<?php include('admin/inc/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Event - Wisata Malang</title>
	<link rel="icon" type="image/png" href="img/icon/bavel.png">



	<!-- Import Icon -->
  	<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">

	<!-- Import Style -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/swipe.min.css">

</head>
<body>

<!-- Navbar -->
<nav class="navbar">
	<div class="container">
		<div class="navbar-bars">
			<a href="#" class="navbar-title sidebar-toggle" style="padding: 0;"><i class="ion-navicon-round"></i></a>
        	<a href="index.html" class="navbar-title" style="color: white;">Wisata Malang</a>
		</div>
		<div class="navbar-item">
			<a href="index.html" class="navbar-title" style="color: white;">Wisata Malang</a>
			<ul>
		        <li><a href="destination.php">Destination</a></li>
			    <li><a href="gallery.php">Gallery</a></li>
			    <li><a href="index.php#discover">Discover</a></li>
			    <li><a href="news.php"> News</a></li>
				<li><a href="admin/login.php">LOGIN</a></li>
  		  	</ul>
		</div>
	</div>
</nav>

<!-- Sidebar -->
<div class="sidebar">
<ul class="sidebar-list">
	<li><a href="" class="close"><span class="ion-android-close"></span></a></li>
	<li class="sidebar-list-hover"><a href="index.php">Home</a></li>
    <li class="sidebar-list-hover"><a href="destination.php">Destination</a></li>
    <li class="sidebar-list-hover"><a href="gallery.php">Gallery</a></li>
    <li class="sidebar-list-hover"><a href="index.php#discover">Discover</a></li>
    <li class="sidebar-list-hover"><a href="news.php"> News</a></li>
    
</ul>                    
</div>

<!-- Sidebar Overlay -->
<section class="sidebar-overlay"></section>

<section class="section-header-single">
	<img src="img/bg-event.jpg">
	<div class="overlay">
		<div class="header-title">
			<h3>See The Events</h3>	
			<span class="ion-record"></span>&nbsp;
			<span class="ion-record"></span>&nbsp;
			<span class="ion-record"></span>
		</div>
	</section>
</section>

<ul class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li>Events</li>
</ul>

<sectionid="main-content" class="clearfix">
<div class="container">
        <hr>
        
        <h2>Event</h2>
        
        <hr>
        <section class="section section-archive">
	<div id="listings">
	<div class="container">
		<div class="row">
			<div class="content">
				<div class="col">
	
	<?php
        $start = 0;
        $limit = 6;

        if(isset($_GET['page'])) {
            $page=$_GET['page'];
            $start=($page-1)*$limit;
        }
        
        $query = mysql_query("SELECT * FROM event ORDER BY id_event DESC LIMIT $start, $limit");
        if($query=== FALSE) { 
    	die(mysql_error()); 
}

        while($data = mysql_fetch_array($query)) {                      
            echo "
                <div class='content-img'>
						<a href='single-event.php?id=$data[id_event]'><img src='admin/uploads/event/$data[gambar]'class='feature'></a>

						<span class='label-img'> event</span>
					</div>
					<div class='content-desc'>
						<div class='content-desc-title'>
							<h3><a href='single-event.php?id=$data[id_event]'>$data[event]</a></h3>
						</div>
						<div class='content-desc-text'>
							<ul class='breadcrumb-post'>
								<li><i class='ion-calendar'></i>$data[tanggal]&nbsp;</li>
								
							</ul>
							<p>$data[deskripsi]</p>
							<a href='single-event.php' class='btn btn-md btn-orange' style='margin-top: 10px;''>Read More</a>
						</div>
					</div>
            ";
        }               
    ?>
    <br>
				</div>

					<ul class="pagination">
						<a href="#" class="pagination-arrow arrow-left">
						   <span class="ion-ios-arrow-back"></span>
						</a>
						<a class="pagin-number active">1</a>
						<a href="#" class="pagin-number">2</a>
						<a href="#" class="pagin-number">3</li>
						<a href="#" class="pagin-number">4</a>
						<a href="#" class="pagin-number">5</a>
						<a href="#" class="pagin-arrow arrow-right">
						   <span class="ion-ios-arrow-forward"></span>
						</a>
					</ul>
			</div>
		</div>
	</div>
</section>
        


<section class="section-footer">
	<div class="texture-handler-top"></div>
	<div class="row">
		<div class="col-left">
			<p>Copyright &copy; 2019</p>
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
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/swipe.js"></script>
</body>
</html>