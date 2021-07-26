<?php echo $__env->make('include_front/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
	
<!-- END section -->

<section class="site-section bg-light" id="section-news">
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
		
		<div class="col-lg-12 col-md-6 col-sm-6" >
				
				<div class="media d-block mb-3 text-center site-media site-animate" style="border-radius:10px">
				<br>
				<h2 class="display-4">Rekomendasi Menu</h2>
				<form   method="get" action="/front/rekomendasi" role="form"> 
					<input type="hidden" value="" name="id">
					<div class="col-md-12 p-2">
					  <p>Pilih Menu apa hari ini?</p>
					  
					  <p>Kami akan bantu mendapatkan rekomendasi yang tepat berdasarkan :</p>
					  
					  <p><b>A. Apakah kamu ada masalah kesehatan dibawah ini?</b></p>
					  
					  <select   class="form-control" name="p">
					  <?php $no = 0 ;
							$menu = DB::table('jenis_penyakit')
													->select('*') 
													->get();
													
							foreach ($menu as $par){
					?>
						<option value="<?php echo $par->id ?>"><?php echo $par->namaJenisPenyakit ?></option>
					<?php } ?>
					  </select>
					  <br>
					  <p><b>B. Bagaimana suasana hati kamu saat ini??</b></p>
					  
					  <select   class="form-control" name="s">
					  <?php $no = 0 ;
							$menu = DB::table('suasana_hati')
													->select('*') 
													->get();
													
							foreach ($menu as $par){
					?>
						<option value="<?php echo $par->id ?>"><?php echo $par->namaSuasanaHati ?></option>
					<?php } ?>
					  </select>
					  
					  
					  <br>
					  <button type="submit" class="btn btn-sm btn-primary" >Cek Rekomendasi Menu</button>
					  <br><br>
					</div>
					
				</form>
				</div>
			</div>
			
			<div class="col-md-12 text-center mb-5 site-animate"> 
			<br>
				<h2 class="display-4">Menu Kami</h2>
				<div class="row justify-content-center">
					<div class="col-md-7">
						<!--<p class="lead">Mulai wisata alam, kuliner, budaya, pantai, serta wahana permainan anak dan keluarga pun ada di Malang</p>-->
					</div> 
				</div>
			</div>
			
			
			<?php
				$no = 0 ;
				$menu = DB::table('menu_hidangan')
										->select('*')   
										->get();
										
				foreach ($menu as $par){
					$no++; 
			?>
			<div class="col-lg-3 col-md-6 col-sm-6" >
				<div class="media d-block mb-3 text-center site-media site-animate" style="border-radius:10px">
					<img src="<?php if($par->gambarMenu  != "" or $par->gambarMenu  != null){echo  "/images/".$par->gambarMenu;}else{} ?>" alt=" " class="img-fluid" style="width: 350px;height: 200px;"> 
					
					<div class="media-body  ">
						<a href="/front/detail?id=<?php echo e($par->id); ?>"><h5 class="mt-2 h4"><?php echo $par->namaMenu  ?></h5></a>
					 
					<font style="color:#000">Rp. <?php echo number_format($par->harga);?></font> &nbsp;
						<a href="/front/pesan/<?php echo e($par->id); ?>" class="btn btn-sm btn-primary" onclick="return confirm('yakin akan masukan ke keranjang?')">Pesan</a>
					</div>
					<div class="col-md-12 p-2">
					  
					</div>
				</div>
			</div>
			<?php }?>
			
			 
        </div>
    </div>
</section>
<!-- END section -->

		
<?php echo $__env->make('include_front/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PROJECT\github\blog_vue\resources\views/home.blade.php ENDPATH**/ ?>