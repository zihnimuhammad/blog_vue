<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesanan;
class HistorypemesananController extends Controller
{
    public function index()
    {
        $historypesanan = Pesanan::with('menus','users')->paginate(5);
        return view('Admin.HistoryPesanan.data-historypesanan', compact('historypesanan'));
    }

    public function create()
    {
        return view('Admin.HistoryPesanan.create-historypesanan');
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
        return redirect('data-historypesanan')->with('toast_success', 'Data Berhasil Tersimpan');
    }

    public function edit($id)
    {
        $his = Pesanan::findorfail($id);
        return view('Admin.HistoryPesanan.edit-historypesanan',compact('his'));
    }

    public function update(Request $request, $id)
    {
        $his = Pesanan::findorfail($id);
        $his->update($request->all());
        return redirect('data-historypesanan')->with('toast_success', 'Data Berhasil Diupdate');
    }    

    public function destroy($id)
    {
        $his = Pesanan::findorfail($id);
        $his->delete();
        return back()->with('toast_info', 'Data Berhasil Dihapus');;
    }
}
