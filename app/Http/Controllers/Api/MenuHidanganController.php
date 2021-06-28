<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MenuHidanganController extends Controller
{
    public function getMenuHidangan(){
        $MenuHidangan = DB::table('menu_hidangan')->get();
        if($MenuHidangan){
            return response()->json([
                'success' => 1,
                'message' => 'success',
                'data' => $MenuHidangan
            ]);
        }
        return response()->json([
            'success' => 0,
            'message' => 'error dalam pengambilan data',
        ]);
    }
}
