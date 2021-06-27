<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenujenispenyakitController extends Controller
{
    public function index()
    {
        //$Menujenispenyakit = \App\Menujenispenyakit::all();
		
		$Menujenispenyakit = DB::table('menu_jenis_penyakit')
        ->join('jenis_penyakit', 'jenis_penyakit.id', '=' ,'menu_jenis_penyakit.idJenisPenyakit')
		->join('suasana_hati', 'suasana_hati.id', '=' ,'menu_jenis_penyakit.idSuasanaHati')
		->join('menu_hidangan', 'menu_hidangan.id', '=' ,'menu_jenis_penyakit.idMenu')
        ->select('menu_jenis_penyakit.*', 'jenis_penyakit.namaJenisPenyakit', 'menu_hidangan.namaMenu', 'suasana_hati.namaSuasanaHati')
		->get();
		  
 
        return $Menujenispenyakit->toJson();
    }
	
	public function penyakit(){
		$jenispenyakit = DB::table('jenis_penyakit')->get(); 
        return $jenispenyakit->toJson();
	}
	
	public function create()  
    {
         $Menujenispenyakit = \App\Menujenispenyakit::all();
        return $Menujenispenyakit->toJson();
    }
 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          'idJenisPenyakit' => 'required',
		  'idMenu' => 'required' ,
		  'idSuasanaHati' => 'required',
		  'bobot' => 'required'
        ]);
 
        $project = \App\Menujenispenyakit::create([
          'idJenisPenyakit' => $validatedData['idJenisPenyakit'] ,
		  'idMenu' => $validatedData['idMenu']   ,
		  'idSuasanaHati' => $validatedData['idSuasanaHati']  ,
			'bobot' => $validatedData['bobot'] 		  
        ]);
 
        $msg = [
            'success' => true,
            'message' => 'Menujenispenyakit created successfully!'
        ];
 
        return response()->json($msg);
    }
	
	
	
 
    public function getMenujenispenyakit($id) // for edit and show
    {
        $menujenispenyakit = \App\Menujenispenyakit::find($id);
 
        return $menujenispenyakit->toJson();
    }
 
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
          'idJenisPenyakit' => 'required',
		  'idMenu' => 'required' ,
		  'idSuasanaHati' => 'required',
		  'bobot' => 'required'
        ]);
 
        $menujenispenyakit = \App\Menujenispenyakit::find($id);
        $menujenispenyakit->idJenisPenyakit = $validatedData['idJenisPenyakit'];
		$menujenispenyakit->idMenu = $validatedData['idMenu'];
		$menujenispenyakit->idSuasanaHati = $validatedData['idSuasanaHati'];
		$menujenispenyakit->bobot = $validatedData['bobot'];
        $menujenispenyakit->save();
 
        $msg = [
            'success' => true,
            'message' => 'Menu Jenis Penyakit updated successfully'
        ];
 
        return response()->json($msg);
    }
 
    public function delete($id)
    {
        $menujenispenyakit = \App\Menujenispenyakit::find($id);
        if(!empty($menujenispenyakit)){
            $menujenispenyakit->delete();
            $msg = [
                'success' => true,
                'message' => 'Menu Jenis Penyakit deleted successfully!'
            ];
            return response()->json($msg);
        } else {
            $msg = [
                'success' => false,
                'message' => 'Menu Jenis Penyakit deleted failed!'
            ];
            return response()->json($msg);
        }
    }
}
