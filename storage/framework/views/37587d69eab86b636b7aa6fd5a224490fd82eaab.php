<?php echo $__env->make('include_front/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
	
<!-- END section -->

<section class="site-section bg-light" id="section-about">
    <div class="container">
	
	<div class="clearfix">
	<?php if(Session::has('msgbox')): ?>
	<div class="alert alert-block alert-success">
			<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
			</button>  
			<?php echo e(Session::get('msgbox')); ?>

		</div>
		
	 <?php endif; ?>
	 
	<?php if(Session::has('msgboxfailed')): ?>
	<div class="alert alert-block alert-danger">
			<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
			</button>  
			<?php echo e(Session::get('msgbox')); ?>

		</div>
		
	 <?php endif; ?>
</div>


        <div class="row">
			<div class="col-md-12 text-center mb-5 site-animate"> 
				<h2 class="display-4">Tentang Kami</h2>
				<div class="row justify-content-center">
					<div class="col-md-7">
						<!--<p class="lead">Mulai wisata alam, kuliner, budaya, pantai, serta wahana permainan anak dan keluarga pun ada di Malang</p>-->
					</div> 
				</div>
			</div>
			
 
			<div class="col-lg-12 col-md-6 col-sm-6" >
				<p>Semua orangtua wajib memperhatikan dan menjaga pola makan anak sejak dini. Sebab, bila tidak, masalah seperti obesitas dan kurang berat badan mudah mengintai anak.

Nimali Fernando MD, MPH, dari Yum Pediatrics, mengatakan, 30 persen anak di Amerika mengalami obesitas yang penyebabnya berasal dari pola makan tak sehat. Namun, ia turut menemukan anak yang tidak mengalami obesitas juga memiliki masalah pada kebiasaan makan.</p>
				<p>Masalah ini menggerakkan Fernando bersama kolega untuk mencetuskan sebuah situs panduan makan anak yang dilengkapi dengan beragam resep.

The Doctor Yum Project, merupakan situs panduan makanan yang bertujuan untuk mengubah budaya kebiasaan makan anak. Disana tertera resep makanan sehat yang bisa ditiru oleh orangtua. Bahkan Dr Yum Project, juga membuka kelas masak untuk menunjukkan kepada orangtua cara memasak dan resep yang sehat.</p>
			</div>
			 
			
			 
        </div>
    </div>
</section>
<!-- END section -->

		
<?php echo $__env->make('include_front/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ad\blog_vue\resources\views/about.blade.php ENDPATH**/ ?>