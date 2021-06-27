<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pesanan;
class PemesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::with('menus','users')->paginate(5);
        return view('Admin.Pesanan.data-pesanan', compact('pesanan'));
    }

    public function create()
    {
        return view('Admin.Pesanan.create-pesanan');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        Pesanan::create([
            'idMenu' => $request->idMenu,
            'idPengguna' => $request->idPengguna,
            'tanggalPesan' => $request->tanggalPesan,
            'jumlahPesan' => $request->jumlahPesan,
            'harga' => $request->harga,
            'totalharga' => $request->totalharga,
            'orderno' => $request->orderno,
            'mejano' => $request->mejano,

        ]);
        return redirect('data-pesanan')->with('toast_success', 'Data Berhasil Tersimpan');
    }

    public function edit($id)
    {
        $pes = Pesanan::findorfail($id);
        return view('Admin.Pesanan.edit-pesanan',compact('pes'));
    }

    public function update(Request $request, $id)
    {
        $pes = Pesanan::findorfail($id);
        $pes->update($request->all());
        return redirect('data-pesanan')->with('toast_success', 'Data Berhasil Diupdate');
    }    

    public function destroy($id)
    {
        $pes = Pesanan::findorfail($id);
        $pes->delete();
        return back()->with('toast_info', 'Data Berhasil Dihapus');;
    }
}
