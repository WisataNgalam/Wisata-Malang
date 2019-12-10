<?php include('admin/inc/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>News - Wisma Wisata Malang</title>
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
        	<a href="index.php" class="navbar-title" style="color: white;">Wisma Wisata Malang</a>
		</div>
		<div class="navbar-item">
			<a href="index.php" class="navbar-title" style="color: white;">Wisma Wisata Malang</a>
			<ul>
		        <li><a href="destination.php">Destination</a></li>
			    <li><a href="gallery.php">Gallery</a></li>
			    <!--<li><a href="index.php#discover">Discover</a></li>-->
			    <li><a href="news.php"> News</a></li>
				<li><a href="admin/login.php"> Login</a></li>
  		  	</ul>
		</div>
	</div>
</nav>


<!-- Sidebar Overlay -->
<section class="sidebar-overlay"></section>
<section class="section-header-single">
	<img src="img/bg-news.jpg">
	<div class="overlay">
		<div class="header-title">
			<h3>What's Happen</h3>	
			<span class="ion-record"></span>&nbsp;
			<span class="ion-record"></span>&nbsp;
			<span class="ion-record"></span>
		</div>
	</section>
</section>

<ul class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li>News</li>
</ul>

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
        
        $query = mysql_query("SELECT * FROM berita ORDER BY id_blog DESC LIMIT $start, $limit");
        if($query=== FALSE) { 
    	die(mysql_error()); 
}

        while($data = mysql_fetch_array($query)) {                      
            echo "
                <div class='content-img'>
						<a href='single-news.php?id=$data[id_blog]'><img src='admin/uploads/berita/$data[gambar]'class='feature'></a>

						<span class='label-img'> News</span>
					</div>
					<div class='content-desc'>
						<div class='content-desc-title'>
							<h3><a href='single-news.php?id=$data[id_blog]'>$data[judul]</a></h3>
						</div>
						<div class='content-desc-text'>
							<ul class='breadcrumb-post'>
								<li><i class='ion-calendar'></i>$data[tanggal]&nbsp;</li>
								
							</ul>
							<p>$data[deskripsi]</p>
							<a href='single-news.php' class='btn btn-md btn-orange' style='margin-top: 10px;''>Read More</a>
						</div>
					</div>
            ";
        }               
    ?>
    <br>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

				<br>

					<br><br><ul class="pagination">
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
		
	</div>
	<div class="footer-bottom">
		<p>Kelompok Satu - Created With <span class="ion-heart red"></span> uWu</p>
	</div>
</section>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/swipe.js"></script>
</body>
</html>