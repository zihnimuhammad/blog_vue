<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pesanan;
class PemesananController extends Controller
{
    public function index(Request $request)
    {
        $pesanan = Pesanan::with('menus','users')->orderBy('created_at', 'desc')->paginate(5);
        return view('Admin.Pesanan.data-pesanan', compact('pesanan'));
    }

    public function create()
    {
        return view('Admin.Pesanan.create-pesanan');
    }

    public function store(Request $request)
    {
        $iduser = "";
        $trx=0;
        // $jumlah = $request -> get('jumlahPesan');
        // $harga  = $request -> get('totalharga');
        // //perkalian variabel a dengan variabel b
        // $total = $jumlah * $harga;

        if($request->session()->has('username')){
			$iduser = $request->session()->get('id_user');
			$username = $request->session()->get('username');
			$role = $request->session()->get('role');			
		}
        $order_no = 'CFG'.$iduser.chr(rand(65,90)).$trx;
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
        return redirect('data-pesanan')->with('success', 'Data Berhasil Tersimpan');
    }

    public function edit($id)
    {
        $pes = Pesanan::findorfail($id);
        return view('Admin.Pesanan.edit-pesanan',compact('pes'));
    }

    public function update(Request $request, $id)
    {
        $pes = Pesanan::findorfail($id);
        $pesUpdate = [
            'idMenu' => $request['idMenu'],
            'idPengguna' => $request['idPengguna'],
            'mejano' => $request['mejano'],
            'jumlahPesan' => $request['jumlahPesan'],
            'harga' => $request['harga'],
            'totalharga' => $request['totalharga'],
            'tanggalPesan' => $pes->tanggalPesan,
        ];
        $pes->update($pesUpdate);
        return redirect('data-pesanan')->with('success', 'Data Berhasil Diupdate');
    }    

    public function destroy($id)
    {
        $pes = Pesanan::findorfail($id);
        $pes->delete();
        return back()->with('info', 'Data Berhasil Dihapus');;
    }
}
