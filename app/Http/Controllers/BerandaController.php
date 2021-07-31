<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BerandaController extends Controller
{
    public function index()
    {
        $karyawan       =   DB::table('karyawan')->count();
        $menu_hidangan  =   DB::table('menu_hidangan')->count();
        $pesanan       =   DB::table('pesanan')->count();
        $jenis_penyakit       =   DB::table('jenis_penyakit')->count();
        return view('Admin.HalamanDepan.Beranda',compact('karyawan','menu_hidangan','pesanan','jenis_penyakit'));
    }
    public function barChart(){
        $users  = User::select(DB::raw("COUNT(*) as count"))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('count');
        $months = User::select(DB::raw("COUNT(*) as count"))
                ->whereYear('created_at', date('Y'))
                ->groupBy(DB::raw("Month(created_at)"))
                ->pluck('count');

        $datas  = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index => $months)
        {
            $datas[$months] = $users[$index];
        }

        return view('bar-chart',compact('datas'));
    }
}
