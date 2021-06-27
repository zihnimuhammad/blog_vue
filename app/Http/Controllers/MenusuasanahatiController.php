<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenusuasanahatiController extends Controller
{
    public function index()
    {
        //$Menusuasanahati = \App\Menusuasanahati::all();
		
		$Menusuasanahati = DB::table('menu_suasana_hati')
        ->join('suasana_hati', 'suasana_hati.id', '=' ,'menu_suasana_hati.idSuasanaHati')
		->join('menu_hidangan', 'menu_hidangan.id', '=' ,'menu_suasana_hati.idMenu')
        ->select('menu_suasana_hati.*', 'suasana_hati.namaSuasanaHati', 'menu_hidangan.namaMenu')
		->get(); 
 
        return $Menusuasanahati->toJson();
    }
	
	public function penyakit(){
		$jenispenyakit = DB::table('suasana_hati')->get(); 
        return $jenispenyakit->toJson();
	}
	
	public function create()  
    {
         $Menusuasanahati = \App\Menusuasanahati::all();
        return $Menusuasanahati->toJson();
    }
 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          'idSuasanaHati' => 'required',
		  'idMenu' => 'required' 
        ]);
 
        $project = \App\Menusuasanahati::create([
          'idSuasanaHati' => $validatedData['idSuasanaHati'] ,
		  'idMenu' => $validatedData['idMenu']   
        ]);
 
        $msg = [
            'success' => true,
            'message' => 'Menusuasanahati created successfully!'
        ];
 
        return response()->json($msg);
    }
	  
 
    public function getMenusuasanahati($id) // for edit and show
    {
        $menusuasanahati = \App\Menusuasanahati::find($id); 
        return $menusuasanahati->toJson();
    }
 
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
          'idSuasanaHati' => 'required',
		  'idMenu' => 'required' 
        ]);
 
        $menusuasanahati = \App\Menusuasanahati::find($id);
        $menusuasanahati->idSuasanaHati = $validatedData['idSuasanaHati'];
		$menusuasanahati->idMenu = $validatedData['idMenu'];
		
        $menusuasanahati->save();
 
        $msg = [
            'success' => true,
            'message' => 'Menu Suasana Hati updated successfully'
        ];
 
        return response()->json($msg);
    }
 
    public function delete($id)
    {
        $menusuasanahati = \App\Menusuasanahati::find($id);
        if(!empty($menusuasanahati)){
            $menusuasanahati->delete();
            $msg = [
                'success' => true,
                'message' => 'Menu Suasana Hati deleted successfully!'
            ];
            return response()->json($msg);
        } else {
            $msg = [
                'success' => false,
                'message' => 'Menu Suasana Hati deleted failed!'
            ];
            return response()->json($msg);
        }
    }
}
