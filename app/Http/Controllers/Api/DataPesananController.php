<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DataPesananController extends Controller
{
    public function getPesanan(){
        $Pesanan = DB::table('pesanan')
            ->join('users', 'users.id', '=' ,'pesanan.idPengguna')
            ->join('menu_hidangan', 'menu_hidangan.id', '=' ,'pesanan.idMenu')
            ->select('pesanan.*', 'users.first_name', 'menu_hidangan.namaMenu')
            ->whereIn('pesanan.status',array('Belum Diproses','Sedang Diproses'))
            ->get();
        if($Pesanan){
            return response()->json([
                'success' => 1,
                'message' => 'success',
                'data' => $Pesanan
            ]);
        }
        return response()->json([
            'success' => 0,
            'message' => 'error dalam pengambilan data',
        ]);
    }
}
