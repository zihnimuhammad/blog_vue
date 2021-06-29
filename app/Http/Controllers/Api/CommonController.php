<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pesanan;
use Illuminate\Support\Facades\Validator;

class CommonController extends Controller
{
    public function updateStatusPesanan(Request $requset){

        $id = $requset->id;
        $pesanan = Pesanan::findorfail($id);
        
        if($pesanan){
            $pesanan->status = $requset->status;
            $updated = $pesanan->save();

            if($updated){
                return response()->json([
                    'success' => 1,
                    'message' => 'Status updated', 
                    'data' => $updated
                ]);
            } else {
                return $this->error('Update Gagal');
            }
        }
        return $this->error('Pesanan tidak ditemukan Gagal');
    }


    public function error($pasan){
        return response()->json([
            'success' => 0,
            'message' => $pasan
        ]);
    }
}
