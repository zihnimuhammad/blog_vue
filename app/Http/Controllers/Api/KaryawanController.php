<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KaryawanController extends Controller
{
    public function getKaryawan(){

        $Karyawan = \App\Karyawan::all();

        if($Karyawan){
            return response()->json([
                'success' => 1,
                'message' => 'success',
                'data' => $Karyawan
            ]);
        }
        return response()->json([
            'success' => 0,
            'message' => 'error dalam pengambilan data',
        ]);
    }
}
