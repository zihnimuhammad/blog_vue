<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menujenispenyakit;
class JenispenyakitmenuController extends Controller
{
    public function index()
    {
        $menujenispenyakit = Menujenispenyakit::with('menus','suasana','jenis')->paginate(5);
        return view('Admin.Menujenispenyakit.data-menujenispenyakit', compact('menujenispenyakit'));
    }

    public function create()
    {
        return view('Admin.Menujenispenyakit.create-menujenispenyakit');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        Menujenispenyakit::create([
            'idJenisPenyakit' => $request->idJenisPenyakit,
            'idSuasanaHati' => $request->idSuasanaHati,
            'idMenu' => $request->idMenu,
            'bobot' => $request->bobot,
        ]);
        return redirect('data-menujenispenyakit')->with('toast_success', 'Data Berhasil Tersimpan');
    }

    public function edit($id)
    {
        $men = Menujenispenyakit::findorfail($id);
        return view('Admin.Menujenispenyakit.edit-menujenispenyakit',compact('men'));
    }

    public function update(Request $request, $id)
    {
        $men = Menujenispenyakit::findorfail($id);
        $men->update($request->all());
        return redirect('data-menujenispenyakit')->with('toast_success', 'Data Berhasil Diupdate');
    }    

    public function destroy($id)
    {
        $men = Menujenispenyakit::findorfail($id);
        $men->delete();
        return back()->with('toast_info', 'Data Berhasil Dihapus');;
    }
}
