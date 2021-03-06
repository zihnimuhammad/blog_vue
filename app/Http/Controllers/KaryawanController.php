<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
class KaryawanController extends Controller
{
    public function index()
    {
        $datakaryawan = Karyawan::paginate(3);
        return view('Admin.Karyawan.data-karyawan', compact('datakaryawan'));
    }

    public function create()
    {
        return view('Admin.Karyawan.create-karyawan');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        Karyawan::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
        ]);
        return redirect('data-karyawan')->with('success', 'Data Berhasil Tersimpan');
        // $this->validate($request,[
        //     'nama' => 'required',
        //     'jabatan' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'no_hp' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        //     'alamat' => 'required',
        //  ]);
        //  return view('/data-karyawan',['data' => $request]);
    }

    public function edit($id)
    {
        $kar = Karyawan::findorfail($id);
        return view('Admin.Karyawan.edit-karyawan',compact('kar'));
    }

    public function update(Request $request, $id)
    {
        $kar = Karyawan::findorfail($id);
        $kar->update($request->all());
        return redirect('data-karyawan')->with('success', 'Data Berhasil Diupdate');
    }    

    public function destroy($id)
    {
        $kar = Karyawan::findorfail($id);
        $kar->delete();
        return back()->with('info', 'Data Berhasil Dihapus');;
    }
}
