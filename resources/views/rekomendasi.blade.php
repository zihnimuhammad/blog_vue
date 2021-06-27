@include('include_front/header')
		
	
<!-- END section -->

<section class="site-section bg-light" id="section-news">
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
			<div class="col-md-12 text-center mb-5 site-animate"> 
				<h5 class="display-4">Rekomendasi Menu</h5>
				<div class="row justify-content-center">
					<div class="col-md-7">
						<!--<p class="lead">Mulai wisata alam, kuliner, budaya, pantai, serta wahana permainan anak dan keluarga pun ada di Malang</p>-->
					</div> 
				</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6" >
				<div class="media d-block mb-3 text-center site-media site-animate" style="border-radius:10px">
				<form   method="get" action="/front/rekomendasi" role="form"> 
					<input type="hidden" value="<?php echo $_GET['id']?>" name="id">
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
								$select = "";
								if($par->id == $_GET['p']) $select= "selected";
					?>
						<option value="<?php echo $par->id ?>" <?php echo $select ?>><?php echo $par->namaJenisPenyakit ?></option>
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
								$select = "";
								if($par->id == $_GET['p']) $select= "selected";
					?>
						<option value="<?php echo $par->id ?>" <?php echo $select ?>><?php echo $par->namaSuasanaHati ?></option>
					<?php } ?>
					  </select>
					  
					  
					  <br>
					  <button type="submit" class="btn btn-sm btn-primary" >Cek Rekomendasi Menu</button>
					  <br><br>
					</div>
					
				</form>
				</div>
			</div>
			<?php
			
			$array_menu = array();
			
			//hitung rekomendasi
			
			//by all
			$nilai = 100;
			$datalatih = DB::table('data_latih')
										->select('*') 
										->where('nilaiBobotLatig', '>', 0) 
										->where('idJenisPenyakit', $_GET['p']) 
										->get();
			foreach ($datalatih as $par){
				
				$x1 = 0; 
				$x2 = 0;
				
				if($par->idJenisPenyakit == $_GET['p'] && $par->idSuasanaHati == $_GET['s']){
					
					if($par->nilaiBobotLatig >= 70){
						$x1 = $par->nilaiBobotLatig;
					}else{
						$x2 = $par->nilaiBobotLatig;
					}
				}
				
				//if($par->idSuasanaHati == $_GET['s']){
				//	$x2 = $par->nilaiBobotLatig;
				//}
				
				if($x1 == 0 && $x2 == 0){ continue;}
				
				//rumus
				$kurangi = $x1 - $x2;
				 $pangkat = pow($kurangi ,2);
				 
				 $euc = sqrt($pangkat);
				 
				//if($euc > 0){
					$rek = array();
					$rek['idmenu'] = $par->idMenu;
					$rek['euc'] = $euc;
					 
					$array_menu[] = $rek;
				//}
				
			}
			
			 
			//sorting
			
			$euc = array_column($array_menu, 'euc');

			array_multisort($euc, SORT_DESC, $array_menu);
			
		 
			 
 
			$in = array();
			foreach($array_menu as $val){ 
				$in[] = $val['idmenu']; 
			}
			$arraywhere = array_unique($in);
			 
			  
			
				$no = 0 ;
				$menu = DB::table('menu_hidangan')
										->select('*')
										->where('id', $array_menu[0]['idmenu'])
										->get();
										
				foreach ($menu as $par){
					
					$no++; 
			?>
			<div class="col-lg-6 col-md-6 col-sm-6" >
				<div class="media d-block mb-3 text-center site-media site-animate" style="border-radius:10px"><br>
				
				<h5>Menu yang kami rekomendasikan</h5>
					<img src="<?php if($par->gambarMenu  != "" or $par->gambarMenu  != null){echo  "/images/".$par->gambarMenu;}else{} ?>" alt=" " class="img-fluid" style="width: 350px;height: 250px;"> 
					
					<div class="media-body  ">
						 <h5 class="mt-2 h4"><?php echo $par->namaMenu  ?></h5> 
					 
					<font style="color:#000">Rp. <?php echo number_format($par->harga);?></font> &nbsp;
						<a href="/front/pesan/{{ $par->id }}" class="btn btn-sm btn-primary" onclick="return confirm('yakin akan masukan ke keranjang?')">Pesan</a>
					</div>
					<div class="col-md-12 p-2">
					  
					</div>
				</div>
			</div>
			<?php }
		
			?>
			
			  
        </div>
 
		
		<div class="row">
			<div class="col-md-12 text-center mb-5 site-animate mt-5"> 
				<h2 class="display-4">Rekomendasi Lainnya</h2>
				<div class="row justify-content-center">
					<div class="col-md-7">
						<!--<p class="lead">Mulai wisata alam, kuliner, budaya, pantai, serta wahana permainan anak dan keluarga pun ada di Malang</p>-->
					</div> 
				</div>
			</div>
			
			
			<?php
			$no = 0 ;
			foreach($arraywhere as $hasil){
				
				$menu = DB::table('menu_hidangan')
										->select('*')   
										->where('id', $hasil)
										->get();
										
				foreach ($menu as $par){
					$no++; 
			?>
			<div class="col-lg-3 col-md-6 col-sm-6" >
				<div class="media d-block mb-3 text-center site-media site-animate" style="border-radius:10px">
					<img src="<?php if($par->gambarMenu  != "" or $par->gambarMenu  != null){echo  "/images/".$par->gambarMenu;}else{} ?>" alt=" " class="img-fluid" style="width: 350px;height: 200px;"> 
					
					<div class="media-body  ">
						<a href="/front/detail?id={{ $par->id }}"><h5 class="mt-2 h4"><?php echo $par->namaMenu  ?></h5></a>
					 
					<font style="color:#000">Rp. <?php echo number_format($par->harga);?></font> &nbsp;
						<a href="/front/pesan/{{ $par->id }}" class="btn btn-sm btn-primary" onclick="return confirm('yakin akan masukan ke keranjang?')">Pesan</a>
					</div>
					<div class="col-md-12 p-2">
					  
					</div>
				</div>
			</div>
			<?php }
			
			}?>
			
			 
        </div>
		
		<div class="row">
			<div class="col-md-12 text-center mb-5 site-animate mt-5"> 
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
						<a href="/front/detail?id={{ $par->id }}"><h5 class="mt-2 h4"><?php echo $par->namaMenu  ?></h5></a>
					 
					<font style="color:#000">Rp. <?php echo number_format($par->harga);?></font> &nbsp;
						<a href="/front/pesan/{{ $par->id }}" class="btn btn-sm btn-primary" onclick="return confirm('yakin akan masukan ke keranjang?')">Pesan</a>
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

		
@include('include_front/footer')