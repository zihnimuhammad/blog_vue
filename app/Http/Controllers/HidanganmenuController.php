<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menuhidangan;
class HidanganmenuController extends Controller
{
    public function index()
    {
        $menuhidangan = Menuhidangan::latest()->get();
        return view('Admin.Menuhidangan.data-menuhidangan',compact('menuhidangan'));
    }

    public function create()
    {
        return view('Admin.Menuhidangan.create-menuhidangan');
    }

    public function edit($id)
    {
        $hid = Menuhidangan::findorfail($id);
        return view('Admin.Menuhidangan.edit-menuhidangan',compact('hid'));
    }

    public function update(Request $request, $id)
    {
        $ubah = Menuhidangan::findorfail($id);
        $dtawal = $ubah->gambarMenu;

        $hid = [
            'namaMenu' => $request['namaMenu'],
            'keterangan' => $request['keterangan'],
            'harga' => $request['harga'],
            'gambarMenu' => $dtawal,

        ];
        $request->gambarMenu->move(public_path().'/images', $dtawal);
        $ubah->update($hid);
        return redirect('data-menuhidangan')->with('toast_success', 'Data Berhasil Diupdate');
    }    
    
    public function destroy($id)
    {
        $hapus = Menuhidangan::findorfail($id);
        $file = public_path('/images/').$hapus->gambarMenu;
        //check jika ada gambar
        if (file_exists($file)){
            //maka, hapus file di folder Public/images
            @unlink($file);
        }
        //Hapus data di database
        $hapus->delete();
        return back()->with('toast_info', 'Data Berhasil Dihapus');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $nm = $request->gambarMenu;
        $namaFile = $nm->getClientOriginalName();

            $menuhidangan = new Menuhidangan;
            $menuhidangan->namaMenu = $request->namaMenu;
            $menuhidangan->keterangan = $request->keterangan;            
            $menuhidangan->harga = $request->harga;
            $menuhidangan->gambarMenu = $namaFile;

            $nm->move(public_path().'/images', $namaFile);
            $menuhidangan->save();

            return redirect('data-menuhidangan')->with('toast_success', 'Data Berhasil Tersimpan');
    }
}
