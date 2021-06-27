<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenispenyakitController extends Controller
{
    public function index()
    {
        $jenispenyakits = \App\Jenispenyakit::all();
 
        return $jenispenyakits->toJson();
    }
	
	public function create()  
    {
        $jenispenyakits = \App\Jenispenyakit::all();
 
        return $jenispenyakit->toJson();
    }
 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          'namaJenisPenyakit' => 'required' 
        ]);
 
        $project = \App\Jenispenyakit::create([
          'namaJenisPenyakit' => $validatedData['namaJenisPenyakit'] 
        ]);
 
        $msg = [
            'success' => true,
            'message' => 'Jenispenyakit created successfully!'
        ];
 
        return response()->json($msg);
    }
	
	
	
 
    public function getJenispenyakit($id) // for edit and show
    {
        $jenispenyakit = \App\Jenispenyakit::find($id);
 
        return $jenispenyakit->toJson();
    }
 
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
          'namaJenisPenyakit' => 'required' 
        ]);
 
        $jenispenyakit = \App\Jenispenyakit::find($id);
        $jenispenyakit->namaJenisPenyakit = $validatedData['namaJenisPenyakit'];
         
        $jenispenyakit->save();
 
        $msg = [
            'success' => true,
            'message' => 'Jenis penyakit updated successfully'
        ];
 
        return response()->json($msg);
    }
 
    public function delete($id)
    {
        $jenispenyakit = \App\Jenispenyakit::find($id);
        if(!empty($jenispenyakit)){
            $jenispenyakit->delete();
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
