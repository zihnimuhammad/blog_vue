<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuhidanganController extends Controller
{
    public function index()
    {
        $Menuhidangan = \App\Menuhidangan::all();
 
        return $Menuhidangan->toJson();
    }
	
	public function create()  
    {
        $Menuhidangan = \App\Menuhidangan::all();
 
        return $menuhidangan->toJson();
    }
 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          'namaMenu' => 'required',
		  //'gambarMenu' => 'required',
		  'keterangan' => 'required',
		  'harga' => 'required',
        ]);
		
	 
		$filename =""; 
		if($request->hasFile('file')){
			 
			
			$file = $request->file('file');
			$file->move(base_path('\public\images'), $file->getClientOriginalName());
			
			$filename = $request->file('file')->getClientOriginalName();

		} 
		
 
        $project = \App\Menuhidangan::create([
          'namaMenu' => $validatedData['namaMenu'] ,
		  'gambarMenu' => $filename,
		  'keterangan' => $validatedData['keterangan'] ,
		  'harga' => $validatedData['harga'] 
        ]);
 
 
		
		
        $msg = [
            'success' => true,
            'message' => 'Menuhidangan created successfully!'
        ];
 
        return response()->json($msg);
    }
	
	
	
 
    public function getMenuhidangan($id) // for edit and show
    {
        $menuhidangan = \App\Menuhidangan::find($id);
 
        return $menuhidangan->toJson();
    }
 
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
          'namaMenu' => 'required',
		  //'gambarMenu' => 'required',
		  'keterangan' => 'required',
		  'harga' => 'required',
        ]);
		
		$filename =""; 
		if($request->hasFile('file')){
			$file = $request->file('file');
			$file->move(base_path('\public\images'), $file->getClientOriginalName());
			
			$filename = $request->file('file')->getClientOriginalName();

		} 
 
        $menuhidangan = \App\Menuhidangan::find($id);
        $menuhidangan->namaMenu = $validatedData['namaMenu'];
		if($filename != ""){
		$menuhidangan->gambarMenu = $filename;
		}
		$menuhidangan->keterangan = $validatedData['keterangan'];
		$menuhidangan->harga = $validatedData['harga'];
         
        $menuhidangan->save();
 
        $msg = [
            'success' => true,
            'message' => 'Menu Hidangan updated successfully'
        ];
 
        return response()->json($msg);
    }
 
    public function delete($id)
    {
        $menuhidangan = \App\Menuhidangan::find($id);
        if(!empty($menuhidangan)){
            $menuhidangan->delete();
            $msg = [
                'success' => true,
                'message' => 'Menu Hidangan deleted successfully!'
            ];
            return response()->json($msg);
        } else {
            $msg = [
                'success' => false,
                'message' => 'Menu Hidangan deleted failed!'
            ];
            return response()->json($msg);
        }
    }
}
