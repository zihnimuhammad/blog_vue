<?php echo $__env->make('include_front/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
	
<!-- END section -->

<section class="site-section bg-light" id="section-keranjang">
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
			<div class="col-md-12 text-center mb-5 site-keranjang"> 
				<h2 class="display-4">History Pesanan</h2>
				<div class="row justify-content-center">
					<div class="col-md-7">
						<!--<p class="lead">Mulai wisata alam, kuliner, budaya, pantai, serta wahana permainan anak dan keluarga pun ada di Malang</p>-->
					</div> 
				</div>
			</div>
			
			<div class="col-md-12 text-center mb-5 site-animate"> 
				<table  class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Order No</th>
							<th>Meja No</th>
							<th>Menu</th>
							<th>Qty</th>
							<th>Harga</th>
							<th>Total</th> 
						</tr>
					</thead> 
					<tbody>
						<?php
						$no = 0 ;  
						?>
						<?php $__currentLoopData = $list_pesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $par): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php $no++; ?>
						  <tr>
							<td><?php echo $no ?></td>
							<td><?php echo e($par->orderno); ?></td>
							<td><?php echo e($par->mejano); ?></td>
							<td><?php echo e($par->namaMenu); ?></td>
							<td><?php echo e($par->jumlahPesan); ?></td>
							<td><?php echo e($par->harga); ?></td>
							<td><?php echo e($par->totalharga); ?></td>
						 
							
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
					</tbody>
				</table> 
				
				
			</div>
			
			 
		 
			 
			 
        </div>
    </div>
</section>
<!-- END section -->

		
<?php echo $__env->make('include_front/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ad\blog_vue\resources\views/history.blade.php ENDPATH**/ ?>