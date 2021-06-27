<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suasanahati;
class HatisuasanaController extends Controller
{
    public function index()
    {
        $suasanahati = Suasanahati::paginate(3);
        return view('Admin.Suasanahati.data-suasanahati', compact('suasanahati'));
    }

    public function create()
    {
        return view('Admin.Suasanahati.create-suasanahati');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        Suasanahati::create([
            'namaSuasanaHati' => $request->namaSuasanaHati,
        ]);
        return redirect('data-suasanahati')->with('toast_success', 'Data Berhasil Tersimpan');
    }

    public function edit($id)
    {
        $sua = Suasanahati::findorfail($id);
        return view('Admin.Suasanahati.edit-suasanahati',compact('sua'));
    }

    public function update(Request $request, $id)
    {
        $sua = Suasanahati::findorfail($id);
        $sua->update($request->all());
        return redirect('data-suasanahati')->with('toast_success', 'Data Berhasil Diupdate');
    }    

    public function destroy($id)
    {
        $sua = Suasanahati::findorfail($id);
        $sua->delete();
        return back()->with('toast_info', 'Data Berhasil Dihapus');;
    }
}