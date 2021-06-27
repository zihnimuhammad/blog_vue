<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistorypesananController extends Controller
{
    public function index()
    {
        //$Historypesanan = \App\Historypesanan::all();
		
		$Historypesanan = DB::table('pesanan')
        ->join('users', 'users.id', '=' ,'pesanan.idPengguna')
		->join('menu_hidangan', 'menu_hidangan.id', '=' ,'pesanan.idMenu')
        ->select('pesanan.*', 'users.first_name', 'menu_hidangan.namaMenu')
		->get();
		 
		  
 
        return $Historypesanan->toJson();
    }
	
	 
	
	public function create()  
    {
        $Historypesanan = \App\Historypesanan::all();
 
        return $historypesanan->toJson();
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
 
        $project = \App\Historypesanan::create([
          'idMenu' => $validatedData['idMenu'] ,
		  'idPengguna' => $validatedData['idPengguna']   ,
		  'tanggalPesan' => $validatedData['tanggalPesan']  ,
		  'jumlahPesan' => $validatedData['jumlahPesan']  ,
		  'harga' => $validatedData['harga']  ,
		  'totalharga' => $validatedData['totalharga']   
        ]);
 
        $msg = [
            'success' => true,
            'message' => 'Historypesanan created successfully!'
        ];
 
        return response()->json($msg);
    }
	
	
	
 
    public function getHistorypesanan($id) // for edit and show
    {
       
		/*
		$historypesanan = DB::table('historypesanan')
        ->join('pengguna', 'pengguna.id', '=' ,'historypesanan.idPengguna')
		->join('menu_hidangan', 'menu_hidangan.id', '=' ,'historypesanan.idMenu')
        ->select('historypesanan.*', 'pengguna.namaLengkap', 'menu_hidangan.namaMenu')
		->where('historypesanan.id', $id)
		->get();
		*/
		
		 $historypesanan = \App\Historypesanan::find($id);
        return $historypesanan->toJson();
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
 
        $historypesanan = \App\Historypesanan::find($id); 
		$historypesanan->idMenu = $validatedData['idMenu'];
		$historypesanan->idPengguna = $validatedData['idPengguna'];
		$historypesanan->tanggalPesan = $validatedData['tanggalPesan'];
		$historypesanan->jumlahPesan = $validatedData['jumlahPesan'];
		$historypesanan->harga = $validatedData['harga'];
		$historypesanan->totalharga = $validatedData['totalharga'];
		
        $historypesanan->save();
 
        $msg = [
            'success' => true,
            'message' => 'Historypesanan updated successfully'
        ];
 
        return response()->json($msg);
    }
 
    public function delete($id)
    {
        $historypesanan = \App\Historypesanan::find($id);
        if(!empty($historypesanan)){
            $historypesanan->delete();
            $msg = [
                'success' => true,
                'message' => 'Historypesanan deleted successfully!'
            ];
            return response()->json($msg);
        } else {
            $msg = [
                'success' => false,
                'message' => 'Historypesanan deleted failed!'
            ];
            return response()->json($msg);
        }
    }
}
