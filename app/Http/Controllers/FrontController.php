<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Front;
use Session;

class FrontController extends Controller
{
    public function index(Request $request){
		// mengambil data 
    	/*$front = DB::table('jadwal')
		->select('jadwal.*','lokasi_wisata.*')
		->join('lokasi_wisata','lokasi_wisata.id_lokasi_wisata','=','jadwal.id_lokasi_wisata') 
		->get();
		*/
		$front ="";
		$username= "";
		$countCart = 0;
		if($request->session()->has('username')){
			$iduser = $request->session()->get('id_user');
			$username = $request->session()->get('username');
			$role = $request->session()->get('role');
			
			$countCart = DB::table('keranjang')
				->where('id_user', $iduser) 
				->count();
			}
		return view('home', ['list_front' => $front,'username'=>$username, 'countCart' => $countCart]);
	}
	
	 public function detail(Request $request){
		// mengambil data 
    	/*$front = DB::table('jadwal')
		->select('jadwal.*','lokasi_wisata.*')
		->join('lokasi_wisata','lokasi_wisata.id_lokasi_wisata','=','jadwal.id_lokasi_wisata') 
		->get();
		*/
		$front ="";
		$username= "";
		$countCart=0;
		if($request->session()->has('username')){
			$iduser = $request->session()->get('id_user');
			$username = $request->session()->get('username');
			$role = $request->session()->get('role');
			$countCart = DB::table('keranjang')
				->where('id_user', $iduser) 
				->count();
		}
		
		return view('detail', ['list_front' => $front,'username'=>$username, 'countCart'=>$countCart]);
	}
	
	public function rekomendasi(Request $request){
		// mengambil data 
    	/*$front = DB::table('jadwal')
		->select('jadwal.*','lokasi_wisata.*')
		->join('lokasi_wisata','lokasi_wisata.id_lokasi_wisata','=','jadwal.id_lokasi_wisata') 
		->get();
		*/
		$front ="";
		$username= "";
		$countCart=0;
		if($request->session()->has('username')){
			$iduser = $request->session()->get('id_user');
			$username = $request->session()->get('username');
			$role = $request->session()->get('role');
			$countCart = DB::table('keranjang')
			->where('id_user', $iduser) 
			->count();		
		}
		
		return view('rekomendasi', ['list_front' => $front,'username'=>$username, 'countCart'=>$countCart]);
	}
	
	
	public function pesan($id, Request $request)
    {
		$iduser = "";
		if($request->session()->has('username')){
			$iduser = $request->session()->get('id_user');
			$harga=0;
			$qty = 1;
			$menu = DB::table('menu_hidangan')
											->select('*')   
											->where('id', $id) 
											->get();
			foreach($menu as $par){ $harga = $par->harga; }
			
			//cek di keranjang dulu
			$keranjang = DB::table('keranjang')
						->select('*')   
						->where('idMenu', $id) 
						->where('id_user', $iduser) 
						->get();	
			$update = false;	
			foreach($keranjang as $par){	
				
				 
				$qtybaru = $qty + $par->qty;;
				 
				DB::table('keranjang')->where('id',$par->id)->update([
					'qty'	=> $qtybaru,
					'total'=>$harga * $qtybaru
				]);
				
				Session::flash('msgbox', 'Berhasil edit keranjang');
				
				$update = true;
			}
			
			if($update == false){
				 DB::table('keranjang')->insert([
					'idMenu'=>$id, 
					'id_user'=>$iduser, 
					'qty'=>1,
					'harga'=>$harga,
					'total'=>$harga * 1 
				]); 
			}
			
			
			
			Session::flash('msgbox', 'Berhasil menambahkan ke keranjang');
			
		} else{
			return redirect('login');
		}
		
       
		 
		return redirect('/front');
    }
	
	public function about(Request $request){
		 
		$front ="";
		$username= "";
		$countCart=0;
		if($request->session()->has('username')){
			$iduser = $request->session()->get('id_user');
			$username = $request->session()->get('username');
			$role = $request->session()->get('role');	
			
			$countCart = DB::table('keranjang')
				->where('id_user', $iduser) 
				->count();
		}
		
		return view('about', ['list_front' => $front,'username'=>$username, 'countCart'=>$countCart]);
	}
	
	public function contact(Request $request){
		 
		$front ="";
		$username= "";
		$countCart=0;
		if($request->session()->has('username')){
			$iduser = $request->session()->get('id_user');
			$username = $request->session()->get('username');
			$role = $request->session()->get('role');
			$countCart = DB::table('keranjang')
				->where('id_user', $iduser) 
				->count();		
		}
		
		return view('contact', ['list_front' => $front,'username'=>$username, 'countCart'=>$countCart]);
	}
	
	public function keranjang(Request $request){
		 
		$front ="";
		$username= "";
		$iduser = "";
		$countCart = 0;
		if($request->session()->has('username')){
			$iduser = $request->session()->get('id_user');
			$username = $request->session()->get('username');
			$role = $request->session()->get('role');			
		}
		
		//get user
		$user = DB::table('users')
					->select('*')   
					->where('id', $iduser) 
					->get();
		$userdata ="";
		foreach($user as $par){ 
			$userdata = $par;
		}
		
		
		$front = DB::table('keranjang')
		->select('keranjang.*','menu_hidangan.namaMenu','menu_hidangan.gambarMenu')
		->join('menu_hidangan','menu_hidangan.id','=','keranjang.idMenu')
		->where('keranjang.id_user', $iduser) 
		->get();

		$countCart = DB::table('keranjang')
		->where('id_user', $iduser) 
		->count();
		
		$trx=0;
		$notrx = DB::table('pesanan')
						->select('*')     
						->orderBy('id','desc')
						->get();
		foreach($notrx as $par){
			$trx = $par->id;
			break;
		}
		$order_no = 'CFG'.$iduser.chr(rand(65,90)).$trx;
		
		return view('keranjang', ['countCart'=> $countCart, 'list_keranjang' => $front,'username'=>$username, 'userdata'=>$userdata, 'orderno'=>$order_no]);
	}
	 
	 
	public function hapuskeranjang($id, Request $request){
		 
		$front ="";
		$username= "";
		if($request->session()->has('username')){
			$iduser = $request->session()->get('id_user');
			$username = $request->session()->get('username');
			$role = $request->session()->get('role');			
		}
		
		DB::table('keranjang')->where('id', $id)->delete();
		 
		Session::flash('msgbox', 'Berhasil hapus data');
		return redirect('front/keranjang#section-keranjang');
	}
	
	public function tambahkeranjang($id, Request $request){
		 
		$front ="";
		$username= "";
		if($request->session()->has('username')){
			$iduser = $request->session()->get('id_user');
			$username = $request->session()->get('username');
			$role = $request->session()->get('role');			
		}
		//get last qty
		$tot = 0;
		$qty = DB::table('keranjang')
										->select('*')
										->where('id', $id)
										->get();
		foreach($qty as $val){
			$tot =  $val->qty;
		} 
		
		DB::table('keranjang')->where('id', $id)->update([
			'qty'=>$tot+1 
		]);
		 
		Session::flash('msgbox', 'Berhasil update data');
		return redirect('front/keranjang#section-keranjang');
	}
	
	
	public function kurangkeranjang($id, Request $request){
		 
		$front ="";
		$username= "";
		if($request->session()->has('username')){
			$iduser = $request->session()->get('id_user');
			$username = $request->session()->get('username');
			$role = $request->session()->get('role');			
		}
		//get last qty
		$tot = 0;
		$qty = DB::table('keranjang')
										->select('*')
										->where('id', $id)
										->get();
		foreach($qty as $val){
			$tot =  $val->qty;
		} 
		
		if($tot - 1 == 0){
			return redirect('front/hapuskeranjang/'.$id);
		}else{
			DB::table('keranjang')->where('id', $id)->update([
				'qty'=>$tot-1 
			]);
		}
		 
		Session::flash('msgbox', 'Berhasil update data');
		return redirect('front/keranjang#section-keranjang');
	}
	
	
	public function checkout(Request $request)
    {
		$iduser = "";
		if($request->session()->has('username')){
			$iduser = $request->session()->get('id_user');
			
 
			
			//cek di keranjang dulu
			$keranjang = DB::table('keranjang')
						->select('*')     
						->where('id_user', $iduser) 
						->get();	
			$update = false;	
			foreach($keranjang as $par){	
				 
				DB::table('pesanan')->insert([
					'idMenu'=>$par->idMenu, 
					'idPengguna'=>$iduser, 
					'tanggalPesan'=>date('Y-m-d H:i:s'),
					'jumlahPesan'=>$par->qty,
					'harga'=>$par->harga ,
					'totalharga'=>$par->qty * $par->harga,
					'catatan'=>str_replace("%20"," ",$_GET['catatan']),
					'orderno'=>$_GET['orderno'],
					'mejano'=>$_GET['mejano'] 
				]); 
			 
			} 
			
			DB::table('keranjang')->where('id_user', $iduser)->delete();
			
			Session::flash('msgbox', 'Berhasil checkout order');
			
		} else{
			Session::flash('msgboxfailed', 'Gagal order, periksa kuota atau silahkan login terlebih dahulu!');
		}
		
       
		 
		return redirect('/front/keranjang#section-keranjang');
    }
	
	
	public function history(Request $request){
		 
		$front ="";
		$username= "";
		$iduser = "";
		$countCart=0;
		if($request->session()->has('username')){
			$iduser = $request->session()->get('id_user');
			$username = $request->session()->get('username');
			$role = $request->session()->get('role');			
			$front = DB::table('pesanan')
			->select('pesanan.*','menu_hidangan.namaMenu','menu_hidangan.gambarMenu')
			->join('menu_hidangan','menu_hidangan.id','=','pesanan.idMenu') 
			->where('pesanan.idPengguna', $iduser) 
			->get();
			$countCart = DB::table('keranjang')
				->where('id_user', $iduser) 
				->count();
		}
		
		//get user
		 
		
		return view('history', ['list_pesanan' => $front,'username'=>$username, 'countCart'=>$countCart ]);
	}
	 
	
}
