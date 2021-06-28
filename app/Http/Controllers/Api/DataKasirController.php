<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DataKasirController extends Controller
{
    public function getDataKasir(){
        $DataKasir = DB::table('pesanan')
            ->join('users', 'users.id', '=' ,'pesanan.idPengguna')
            ->join('menu_hidangan', 'menu_hidangan.id', '=' ,'pesanan.idMenu')
            ->select('pesanan.*', 'users.first_name', 'menu_hidangan.namaMenu')
            ->where('pesanan.status', '=', 'Selesai')
            ->get();
        if($DataKasir){
            return response()->json([
                'success' => 1,
                'message' => 'success',
                'data' => $DataKasir
            ]);
        }
        return response()->json([
            'success' => 0,
            'message' => 'error dalam pengambilan data',
        ]);
    }
}
