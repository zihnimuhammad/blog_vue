<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Lokasi;
use Session;

class LoginController extends Controller
{
    public function index(){
		 
		return view('login');
	}
	
	public function register(){
		 
		return view('register');
	}
	
	
	public function logout(Request $request){
		
		$request->session()->forget('username');
		$request->session()->forget('role');
		$request->session()->forget('id_user');
		return redirect('login');
	}
	
	public function proses(Request $request)
    {
	 
		$ceklogin = DB::table('users')
		->where('username',$request->username)
		->where('password',md5($request->password))
		->get(); 
		 
		$sukses = false;
		
		foreach($ceklogin as $row){
			$sukses = true;
			$request->session()->put('username',$row->username);
			$request->session()->put('role',$row->role);
			$request->session()->put('id_user',$row->id);
		}			
		 
		if($sukses){
			if($request->session()->get('role')== "admin"){
				return redirect('beranda');
			}else{
				return redirect('/front/pages');
			}
		}else{
			
		 
			
			Session::flash('msgbox', 'Gagal Login'); 
			return redirect('login');
		}
		
    }
	
	public function prosesregister(Request $request)
    {
	 
		DB::table('users')->insert([
			'username'=>$request->username, 
			'password'=>md5($request->password),
			'first_name'=>$request->first_name,
			'email'=>$request->email,
			'phone'=>$request->phone,
			'role'=>'user'
		]); 
		 
		Session::flash('msgbox', 'Berhasil daftar data');
		return redirect('register');
    }
	
	 
}
