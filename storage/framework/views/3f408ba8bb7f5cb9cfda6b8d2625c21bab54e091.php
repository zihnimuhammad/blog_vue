 
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

	<body data-spy="scroll" style="height: 100vh;" data-target="#site-navbar" data-offset="200">
		<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-light site-navbar-light" id="site-navbar">
			<div class="container">
				<a class="navbar-brand" href="/front">Menu Kesehatan</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="oi oi-menu"></span> Menu
				</button>

				<div class="collapse navbar-collapse" id="site-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item <?php if(Request::segment(2)== "pages"){echo "active";}?>"><a href="/front/pages" class="nav-link <?php if(Request::segment(2) == "pages"){echo "active";}?>">Home</a></li>
						
						<li class="nav-item <?php if(Request::segment(2) == "about"){echo "active";}?>"><a href="/front/about" class="nav-link <?php if(Request::segment(2) == "about"){echo "active";}?>">About</a></li>
						 
						<li class="nav-item" <?php if(Request::segment(2) == "contact"){echo "active";}?>><a href="/front/contact" class="nav-link <?php if(Request::segment(2) == "contact"){echo "active";}?>">Contact Us</a></li>
						 
						
						 
						<?php if($username != ""){ ?>
						<li class="nav-item" ><a href="/front/keranjang" class="nav-link">Keranjang (<?php echo $countCart;?>)</a></li>
						<li class="nav-item" ><a href="/front/history" class="nav-link">History Pesanan</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  <?php echo $username; ?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a href="/login/logout" class="nav-link">Logout</a>
							</div>
						  </li>
						<?php }else{?>
						<li class="nav-item" ><a href="/login" class="nav-link">Login/Register</a></li>	
						<?php } ?>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END nav -->
		
		<?php /**PATH C:\xampp\htdocs\ad\blog_vue\resources\views/include_front/header.blade.php ENDPATH**/ ?>