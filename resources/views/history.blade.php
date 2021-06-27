@include('include_front/header')
		
	
<!-- END section -->

<section class="site-section bg-light" id="section-keranjang">
    <div class="container">
	
	<div class="clearfix">
	@if (Session::has('msgbox'))
	<div class="alert alert-block alert-success">
			<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
			</button>  
			{{ Session::get('msgbox')  }}
		</div>
		
	 @endif
	 
	@if (Session::has('msgboxfailed'))
	<div class="alert alert-block alert-danger">
			<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
			</button>  
			{{ Session::get('msgbox')  }}
		</div>
		
	 @endif
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
						@foreach($list_pesanan as $par)
						<?php $no++; ?>
						  <tr>
							<td><?php echo $no ?></td>
							<td>{{ $par->orderno }}</td>
							<td>{{ $par->mejano }}</td>
							<td>{{ $par->namaMenu }}</td>
							<td>{{ $par->jumlahPesan }}</td>
							<td>{{ $par->harga }}</td>
							<td>{{ $par->totalharga }}</td>
						 
							
						</tr>
						@endforeach  
					</tbody>
				</table> 
				
				
			</div>
			
			 
		 
			 
			 
        </div>
    </div>
</section>
<!-- END section -->

		
@include('include_front/footer')