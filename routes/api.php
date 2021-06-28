<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
Personal access client created successfully.
Client ID: 93c2ccf4-78ee-41ca-b69f-f58d63ecc408
Client secret: HX9tIpHnzuz7bQJP4Z030mREgbsWiisALsYTcX52
Password grant client created successfully.
Client ID: 93c2ccf4-ed5e-4ad6-8b96-d1f54b7d2e71
Client secret: XhjAoyGt79MyK6LSRzFUG207ef0OcLsOghOgccIz

*/

//karyawan
Route::post('register', 'API\KaryawanController@register');
Route::post('login', 'API\KaryawanController@login');
Route::get('pesanan', 'API\DataPesananController@getPesanan');
Route::get('menu-hidangan', 'API\MenuHidanganController@getMenuHidangan');
Route::get('data-kasir', 'API\DataKasirController@getDataKasir');
Route::get('history-pesanan', 'API\HistoryPesananController@getHistoryPesanan');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//pemesanan
// Route::get('/data-pesanan', 'Api\PemesananController@index')->name('data-pesanan');
// Route::get('/create-pesanan', 'Api\PemesananController@create')->name('create-pesanan');
// Route::post('/simpan-pesanan', 'Api\PemesananController@store')->name('simpan-pesanan');
// Route::get('/edit-pesanan/{id}', 'Api\PemesananController@edit')->name('edit-pesanan');
// Route::post('/update-pesanan/{id}', 'Api\PemesananController@update')->name('update-pesanan');
// Route::get('/delete-pesanan/{id}', 'Api\PemesananController@destroy')->name('delete-pesanan');


//jenis penyakit
// Route::get('/jenispenyakit', 'JenispenyakitController@index'); 
// Route::get('/jenispenyakit/create', 'JenispenyakitController@create'); 
// Route::post('/jenispenyakit/store', 'JenispenyakitController@store'); 
// Route::get('/jenispenyakit/edit/{id}', 'JenispenyakitController@getJenispenyakit');
// Route::get('/jenispenyakit/show/{id}', 'JenispenyakitController@getJenispenyakit');
// Route::put('/jenispenyakit/update/{id}', 'JenispenyakitController@update');
// Route::delete('/jenispenyakit/delete/{id}', 'JenispenyakitController@delete');  



//suasana hati
// Route::get('/suasanahati', 'SuasanahatiController@index'); 
// Route::get('/suasanahati/create', 'SuasanahatiController@create'); 
// Route::post('/suasanahati/store', 'SuasanahatiController@store'); 
// Route::get('/suasanahati/edit/{id}', 'SuasanahatiController@getSuasanahati');
// Route::get('/suasanahati/show/{id}', 'SuasanahatiController@getSuasanahati');
// Route::put('/suasanahati/update/{id}', 'SuasanahatiController@update');
// Route::delete('/suasanahati/delete/{id}', 'SuasanahatiController@delete');  

//menu hidangan
// Route::get('/menuhidangan', 'MenuhidanganController@index'); 
// Route::get('/menuhidangan/create', 'MenuhidanganController@create'); 
// Route::post('/menuhidangan/store', 'MenuhidanganController@store'); 
// Route::get('/menuhidangan/edit/{id}', 'MenuhidanganController@getMenuhidangan');
// Route::get('/menuhidangan/show/{id}', 'MenuhidanganController@getMenuhidangan');
// Route::post('/menuhidangan/update/{id}', 'MenuhidanganController@update');
// Route::delete('/menuhidangan/delete/{id}', 'MenuhidanganController@delete');  

//menu jenis penyakit
// Route::get('/menujenispenyakit', 'MenujenispenyakitController@index'); 
// Route::get('/menujenispenyakit/create', 'MenujenispenyakitController@create'); 
// Route::post('/menujenispenyakit/store', 'MenujenispenyakitController@store'); 
// Route::get('/menujenispenyakit/edit/{id}', 'MenujenispenyakitController@getMenujenispenyakit');
// Route::get('/menujenispenyakit/show/{id}', 'MenujenispenyakitController@getMenujenispenyakit');
// Route::put('/menujenispenyakit/update/{id}', 'MenujenispenyakitController@update');
// Route::delete('/menujenispenyakit/delete/{id}', 'MenujenispenyakitController@delete');  

// Route::get('/menujenispenyakit/penyakit', 'JenispenyakitController@penyakit'); 


	
//menu suasana hati
// Route::get('/menusuasanahati', 'MenusuasanahatiController@index'); 
// Route::get('/menusuasanahati/create', 'MenusuasanahatiController@create'); 
// Route::post('/menusuasanahati/store', 'MenusuasanahatiController@store'); 
// Route::get('/menusuasanahati/edit/{id}', 'MenusuasanahatiController@getMenusuasanahati');
// Route::get('/menusuasanahati/show/{id}', 'MenusuasanahatiController@getMenusuasanahati');
// Route::put('/menusuasanahati/update/{id}', 'MenusuasanahatiController@update');
// Route::delete('/menusuasanahati/delete/{id}', 'MenusuasanahatiController@delete');



//pesanan

// Route::get('/pesanan', 'PesananController@index'); 
// Route::get('/pesanan/create', 'PesananController@create'); 
// Route::post('/pesanan/store', 'PesananController@store'); 
// Route::get('/pesanan/edit/{id}', 'PesananController@getPesanan');
// Route::get('/pesanan/show/{id}', 'PesananController@getPesanan');
// Route::put('/pesanan/update/{id}', 'PesananController@update');
// Route::delete('/pesanan/delete/{id}', 'PesananController@delete');  


//history pesanan
// Route::get('/historypesanan', 'HistorypesananController@index'); 
// Route::get('/historypesanan/create', 'HistorypesananController@create'); 
// Route::post('/historypesanan/store', 'HistorypesananController@store'); 
// Route::get('/historypesanan/edit/{id}', 'HistorypesananController@getHistorypesanan');
// Route::get('/historypesanan/show/{id}', 'HistorypesananController@getHistorypesanan');
// Route::put('/historypesanan/update/{id}', 'HistorypesananController@update');
// Route::delete('/historypesanan/delete/{id}', 'HistorypesananController@delete');  



//datalatih

// Route::get('/datalatih', 'DatalatihController@index'); 
// Route::get('/datalatih/create', 'DatalatihController@create'); 
// Route::post('/datalatih/store', 'DatalatihController@store'); 
// Route::get('/datalatih/edit/{id}', 'DatalatihController@getDatalatih');
// Route::get('/datalatih/show/{id}', 'DatalatihController@getDatalatih');
// Route::put('/datalatih/update/{id}', 'DatalatihController@update');
// Route::delete('/datalatih/delete/{id}', 'DatalatihController@delete');  