<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuasanahatiController extends Controller
{
    public function index()
    {
        $Suasanahati = \App\Suasanahati::all();
 
        return $Suasanahati->toJson();
    }
	
	public function create()  
    {
        $Suasanahati = \App\Suasanahati::all();
 
        return $suasanahati->toJson();
    }
 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          'namaSuasanaHati' => 'required' 
        ]);
 
        $project = \App\Suasanahati::create([
          'namaSuasanaHati' => $validatedData['namaSuasanaHati'] 
        ]);
 
        $msg = [
            'success' => true,
            'message' => 'Suasanahati created successfully!'
        ];
 
        return response()->json($msg);
    }
	
	
	
 
    public function getSuasanahati($id) // for edit and show
    {
        $suasanahati = \App\Suasanahati::find($id);
 
        return $suasanahati->toJson();
    }
 
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
          'namaSuasanaHati' => 'required' 
        ]);
 
        $suasanahati = \App\Suasanahati::find($id);
        $suasanahati->namaSuasanaHati = $validatedData['namaSuasanaHati'];
         
        $suasanahati->save();
 
        $msg = [
            'success' => true,
            'message' => 'Jenis penyakit updated successfully'
        ];
 
        return response()->json($msg);
    }
 
    public function delete($id)
    {
        $suasanahati = \App\Suasanahati::find($id);
        if(!empty($suasanahati)){
            $suasanahati->delete();
            $msg = [
                'success' => true,
                'message' => 'Jenis penyakit deleted successfully!'
            ];
            return response()->json($msg);
        } else {
            $msg = [
                'success' => false,
                'message' => 'Jenis penyakit deleted failed!'
            ];
            return response()->json($msg);
        }
    }
}
