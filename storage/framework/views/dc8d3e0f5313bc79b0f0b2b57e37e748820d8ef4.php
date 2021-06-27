 
<!DOCTYPE html>
<html lang="en">
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Analisa Kesehatan</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
	<!--
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
	-->
	 
	
	
    <link rel="stylesheet" href="<?php echo e(asset('front2/eatwell/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front2/eatwell/css/open-iconic-bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front2/eatwell/css/animate.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('front2/eatwell/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front2/eatwell/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front2/eatwell/css/magnific-popup.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('front2/eatwell/css/bootstrap-datepicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front2/eatwell/css/jquery.timepicker.css')); ?>">

    

    <link rel="stylesheet" href="<?php echo e(asset('front2/eatwell/css/icomoon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front2/eatwell/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front2/eatwell/css/custom.css')); ?>">
	
	<script type="text/javascript">
		window.jQuery || document.write("<script src='<?php echo e(asset('admin/js/jquery.js')); ?>'>"+"<"+"/script>");
	</script>
		
</head>

	<body data-spy="scroll" data-target="#site-navbar" data-offset="200">
		<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
			<div class="container">
				<a class="navbar-brand" href="/front">Menu Kesehatan</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="oi oi-menu"></span> Menu
				</button>

				<div class="collapse navbar-collapse" id="site-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item <?php if(Request::segment(2)== "pages"){echo "active";}?>"><a href="/front/pages#section-home" class="nav-link <?php if(Request::segment(2) == "pages"){echo "active";}?>">Home</a></li>
						
						<li class="nav-item <?php if(Request::segment(2) == "about"){echo "active";}?>"><a href="/front/about#section-about" class="nav-link <?php if(Request::segment(2) == "about"){echo "active";}?>">About</a></li>
						 
						<li class="nav-item" <?php if(Request::segment(2)   == "contact"){echo "active";}?>><a href="/front/contact#section-about" class="nav-link <?php if(Request::segment(2) == "contact"){echo "active";}?>">Contact Us</a></li>
						 
						
						 
						<?php if($username != ""){ ?>
						<li class="nav-item" ><a href="/front/keranjang" class="nav-link">Keranjang</a></li>
						<li class="nav-item" ><a href="/front/history" class="nav-link">History Pesanan</a></li>
						<li class="nav-item" ><a href="/login/logout" class="nav-link">Logout</a></li>
						<?php }else{?>
						<li class="nav-item" ><a href="/login" class="nav-link">Login/Register</a></li>	
						<?php } ?>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END nav -->
		
		<section class="site-cover"  id="section-home">
		  <div class="container">
			<div class="row align-items-center justify-content-center text-center site-vh-100">
			  <div class="col-md-12">
				<h1 class="site-heading site-animate mb-3">Makanan sehat untuk kamu</h1> 
			  </div>
			</div>
		  </div>
		</section><?php /**PATH C:\xampp\htdocs\blog_vue\resources\views/include_front/header.blade.php ENDPATH**/ ?>