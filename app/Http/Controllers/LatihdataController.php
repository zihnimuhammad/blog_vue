<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datalatih;
class LatihdataController extends Controller
{
    public function index()
    {
        $datalatih = Datalatih::with('jenis','suasana','menus')->paginate(5);
        return view('Admin.Datalatih.data-datalatih', compact('datalatih'));
    }

    public function create()
    {
        return view('Admin.Datalatih.create-datalatih');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        Datalatih::create([
            'idJenisPenyakit' => $request->idJenisPenyakit,
            'idSuasanaHati' => $request->idSuasanaHati,
            'idMenu' => $request->idMenu,
            'nilaiBobotLatig' => $request->nilaiBobotLatig,
        ]);
        return redirect('data-datalatih')->with('toast_success', 'Data Berhasil Tersimpan');
    }

    public function edit($id)
    {
        $dat = Datalatih::findorfail($id);
        return view('Admin.Datalatih.edit-datalatih',compact('dat'));
    }

    public function update(Request $request, $id)
    {
        $dat = Datalatih::findorfail($id);
        $dat->update($request->all());
        return redirect('data-datalatih')->with('toast_success', 'Data Berhasil Diupdate');
    }    

    public function destroy($id)
    {
        $dat = Datalatih::findorfail($id);
        $dat->delete();
        return back()->with('toast_info', 'Data Berhasil Dihapus');;
    }
}