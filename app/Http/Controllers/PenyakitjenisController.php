<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenispenyakit;
class PenyakitjenisController extends Controller
{
    public function index()
    {
        $penyakitjenis = Jenispenyakit::paginate(3);
        return view('Admin.Penyakitjenis.data-penyakitjenis', compact('penyakitjenis'));
    }

    public function create()
    {
        return view('Admin.Penyakitjenis.create-penyakitjenis');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        Jenispenyakit::create([
            'namaJenisPenyakit' => $request->namaJenisPenyakit,
        ]);
        return redirect('data-penyakitjenis')->with('toast_success', 'Data Berhasil Tersimpan');
    }

    public function edit($id)
    {
        $pen = Jenispenyakit::findorfail($id);
        return view('Admin.Penyakitjenis.edit-penyakitjenis',compact('pen'));
    }

    public function update(Request $request, $id)
    {
        $pen = Jenispenyakit::findorfail($id);
        $pen->update($request->all());
        return redirect('data-penyakitjenis')->with('toast_success', 'Data Berhasil Diupdate');
    }    

    public function destroy($id)
    {
        $pen = Jenispenyakit::findorfail($id);
        $pen->delete();
        return back()->with('toast_info', 'Data Berhasil Dihapus');;
    }
}

