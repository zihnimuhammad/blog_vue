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
				<h2 class="display-4">Keranjang Belanja</h2>
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
							<th>Menu</th>
							<th>Qty</th>
							<th>Harga</th>
							<th>Total</th>
							<th></th>
						</tr>
					</thead> 
					<tbody>
						<?php
						$no = 0 ;  
						?>
						<?php $__currentLoopData = $list_keranjang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $par): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php $no++; ?>
						  <tr>
							<td><?php echo $no ?></td>
							<td><img src="<?php if($par->gambarMenu  != "" or $par->gambarMenu  != null){echo  "/images/".$par->gambarMenu;}else{} ?>" alt=" " class="img-fluid" style="width: 300px;height: 200px;"> 
								&nbsp;&nbsp;<?php echo e($par->namaMenu); ?></td>
							<td>
							<a href="/front/kurangkeranjang/<?php echo e($par->id); ?>"><button class="btn btn-danger btn-sm"   >-</button></a>
							&nbsp;&nbsp;
							<?php echo e($par->qty); ?> &nbsp;&nbsp;
							<a href="/front/tambahkeranjang/<?php echo e($par->id); ?>"><button class="btn btn-success btn-sm"    >+</button></a>
							</td>
							<td><?php echo e($par->harga); ?></td>
							<td><?php echo e($par->harga * $par->qty); ?></td>
							<td>
							 <a href="/front/hapuskeranjang/<?php echo e($par->id); ?>"><button class="btn btn-danger btn-sm"   style="margin-left:2px" onclick="return confirm('Yakin akan hapus menu?')" >Hapus</a>
							</td>
							
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
					</tbody>
				</table> 
				
				
			</div>
			<?php
			$trx = 0;
			
			?>
			<div class="col-md-12 text-center mb-5"> 
				<form   method="get" action="/front/checkout" role="form"> 
						<?php echo csrf_field(); ?>
						
						<div class="row"> 
							   
							<div class="col-sm-2  mt-3" >
							Order No
							</div>
							<div class="col-sm-10  mt-3">
							<input id="orderno" name="orderno" class="col-xs-12 col-sm-12" type="text" value="<?php echo $orderno?>" readonly>

							</div>
						 </div>
						 
						<div class="row">  
							<div class="col-sm-2  mt-3" >
							Meja No
							</div>
							<div class="col-sm-10  mt-3">
							<select id="mejano"  name="mejano" class="col-xs-12 col-sm-12"  >
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>

							</div>
						 </div>
					   
                        <!-- #section:elements.form -->
                         
						 <div class="row"> 
							   
							<div class="col-sm-2  mt-3" >
							Catatan
							</div>
							<div class="col-sm-10  mt-3">
							<input id="catatan" name="catatan" class="col-xs-12 col-sm-12" type="text" value="" >

							</div>
						 </div>
						 
                        
                       
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>
                            
                      
                        <div class="clearfix form-actions">
                            <div class="col-md-offset-12 col-md-12">
                                <button class="btn btn-info" type="submit" onclick="return confirm('Yakin akan Checkout pesanan?')">
                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                    Checkout Order
                                </button>
 
                            </div>
                        </div>

                        <div class="hr hr-24"></div>

                    </form>
			</div>
		 
			 
			 
        </div>
    </div>
</section>
<!-- END section -->

		
<?php echo $__env->make('include_front/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ad\blog_vue\resources\views/keranjang.blade.php ENDPATH**/ ?>