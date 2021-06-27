<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatalatihController extends Controller
{
    public function index()
    {
        //$Datalatih = \App\Datalatih::all();
		
		$Datalatih = DB::table('data_latih')
        ->join('jenis_penyakit', 'jenis_penyakit.id', '=' ,'data_latih.idJenisPenyakit')
		->join('suasana_hati', 'suasana_hati.id', '=' ,'data_latih.idSuasanaHati')
		->join('menu_hidangan', 'menu_hidangan.id', '=' ,'data_latih.idMenu')
        ->select('data_latih.*', 'jenis_penyakit.namaJenisPenyakit', 'suasana_hati.namaSuasanaHati', 'menu_hidangan.namaMenu')
		->get();
		  
 
        return $Datalatih->toJson();
    }
	
	 
	
	public function create()  
    {
        $Datalatih = \App\Datalatih::all();
 
        return $datalatih->toJson();
    }
 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          'idJenisPenyakit' => 'required',
		  'idSuasanaHati' => 'required' ,
		  'idMenu' => 'required' ,
		  'nilaiBobotLatig' => 'required' 
        ]);
 
        $project = \App\Datalatih::create([
          'idJenisPenyakit' => $validatedData['idJenisPenyakit'] ,
		  'idSuasanaHati' => $validatedData['idSuasanaHati']   ,
		  'idMenu' => $validatedData['idMenu']  ,
		  'nilaiBobotLatig' => $validatedData['nilaiBobotLatig']   
        ]);
 
        $msg = [
            'success' => true,
            'message' => 'Datalatih created successfully!'
        ];
 
        return response()->json($msg);
    }
	
	
	
 
    public function getDatalatih($id) // for edit and show
    {
       
		/*
		$datalatih = DB::table('datalatih')
        ->join('pengguna', 'pengguna.id', '=' ,'datalatih.idPengguna')
		->join('menu_hidangan', 'menu_hidangan.id', '=' ,'datalatih.idMenu')
        ->select('datalatih.*', 'pengguna.namaLengkap', 'menu_hidangan.namaMenu')
		->where('datalatih.id', $id)
		->get();
		*/
		
		 $datalatih = \App\Datalatih::find($id);
        return $datalatih->toJson();
    }
 
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
          'idJenisPenyakit' => 'required',
		  'idSuasanaHati' => 'required' ,
		  'idMenu' => 'required' ,
		  'nilaiBobotLatig' => 'required'    
        ]);
 
        $datalatih = \App\Datalatih::find($id); 
		$datalatih->idJenisPenyakit = $validatedData['idJenisPenyakit'];
		$datalatih->idSuasanaHati = $validatedData['idSuasanaHati'];
		$datalatih->idMenu = $validatedData['idMenu'];
		$datalatih->nilaiBobotLatig = $validatedData['nilaiBobotLatig']; 
		
        $datalatih->save();
 
        $msg = [
            'success' => true,
            'message' => 'Datalatih updated successfully'
        ];
 
        return response()->json($msg);
    }
 
    public function delete($id)
    {
        $datalatih = \App\Datalatih::find($id);
        if(!empty($datalatih)){
            $datalatih->delete();
            $msg = [
                'success' => true,
                'message' => 'Datalatih deleted successfully!'
            ];
            return response()->json($msg);
        } else {
            $msg = [
                'success' => false,
                'message' => 'Datalatih deleted failed!'
            ];
            return response()->json($msg);
        }
    }
}
