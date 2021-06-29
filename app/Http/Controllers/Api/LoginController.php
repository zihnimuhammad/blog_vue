<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Karyawan;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $requset){

        
        $karyawan = Karyawan::where('email', $requset->email)->first();

        if($karyawan){
            if(password_verify($requset->password, $karyawan->password)){
                return response()->json([
                    'success' => 1,
                    'message' => 'Selamat Datang ' .$karyawan->nama,
                    'user' => $karyawan
                ]);
            }
            return $this->error('Password Salah');
        }
        return $this->error('Username Tidak Terdaftar');
    }

    public function register(Request $requset){
        
        $validasi = Validator::make($requset->all(), [
			'email'=>'required|unique:users',
			'password'=>'required',
            'nama'=>'required',
            'jabatan'=>'required',
            'jenis_kelamin'=>'required',
            'tanggal_lahir'=>'date',
            'no_hp'=>'required',
            'alamat'=>'required',
        ]);

        if($validasi->fails()){
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }

        $karyawan = Karyawan::create(array_merge($requset->all(), [
            'password' => bcrypt($requset->password)
        ]));

        if($karyawan){
            return response()->json([
                'success' => 1,
                'message' => 'Selamat Register Berhasil ', 
                'user' => $karyawan
            ]);
        }
        return $this->error('Registrasi Gagal');
        
    }


    public function error($pasan){
        return response()->json([
            'success' => 0,
            'message' => $pasan
        ]);
    }
}
