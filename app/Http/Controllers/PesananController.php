<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function index()
    {
        //$Pesanan = \App\Pesanan::all();
		
		$Pesanan = DB::table('pesanan')
        ->join('users', 'users.id', '=' ,'pesanan.idPengguna')
		->join('menu_hidangan', 'menu_hidangan.id', '=' ,'pesanan.idMenu')
        ->select('pesanan.*', 'users.first_name', 'menu_hidangan.namaMenu')
		->get();
		  
 
        return $Pesanan->toJson();
    }
	
	 
	
	public function create()  
    {
        $Pesanan = \App\Pesanan::all();
 
        return $pesanan->toJson();
    }
 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          'idMenu' => 'required',
		  'idPengguna' => 'required' ,
		  'tanggalPesan' => 'required' ,
		  'jumlahPesan' => 'required' ,
		  'harga' => 'required' ,
		  'totalharga' => 'required'  
        ]);
 
        $project = \App\Pesanan::create([
          'idMenu' => $validatedData['idMenu'] ,
		  'idPengguna' => $validatedData['idPengguna']   ,
		  'tanggalPesan' => $validatedData['tanggalPesan']  ,
		  'jumlahPesan' => $validatedData['jumlahPesan']  ,
		  'harga' => $validatedData['harga']  ,
		  'totalharga' => $validatedData['totalharga']   
        ]);
 
        $msg = [
            'success' => true,
            'message' => 'Pesanan created successfully!'
        ];
 
        return response()->json($msg);
    }
	
	
	
 
    public function getPesanan($id) // for edit and show
    {
       
		/*
		$pesanan = DB::table('pesanan')
        ->join('pengguna', 'pengguna.id', '=' ,'pesanan.idPengguna')
		->join('menu_hidangan', 'menu_hidangan.id', '=' ,'pesanan.idMenu')
        ->select('pesanan.*', 'pengguna.namaLengkap', 'menu_hidangan.namaMenu')
		->where('pesanan.id', $id)
		->get();
		*/
		
		 $pesanan = \App\Pesanan::find($id);
        return $pesanan->toJson();
    }
 
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
           'idMenu' => 'required',
		  'idPengguna' => 'required' ,
		  'tanggalPesan' => 'required' ,
		  'jumlahPesan' => 'required' ,
		  'harga' => 'required' ,
		  'totalharga' => 'required'   
        ]);
 
        $pesanan = \App\Pesanan::find($id); 
		$pesanan->idMenu = $validatedData['idMenu'];
		$pesanan->idPengguna = $validatedData['idPengguna'];
		$pesanan->tanggalPesan = $validatedData['tanggalPesan'];
		$pesanan->jumlahPesan = $validatedData['jumlahPesan'];
		$pesanan->harga = $validatedData['harga'];
		$pesanan->totalharga = $validatedData['totalharga'];
		
        $pesanan->save();
 
        $msg = [
            'success' => true,
            'message' => 'Pesanan updated successfully'
        ];
 
        return response()->json($msg);
    }
 
    public function delete($id)
    {
        $pesanan = \App\Pesanan::find($id);
        if(!empty($pesanan)){
            $pesanan->delete();
            $msg = [
                'success' => true,
                'message' => 'Pesanan deleted successfully!'
            ];
            return response()->json($msg);
        } else {
            $msg = [
                'success' => false,
                'message' => 'Pesanan deleted failed!'
            ];
            return response()->json($msg);
        }
    }
}
