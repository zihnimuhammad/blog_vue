<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*'); 
 */

 Route::get('', function () {
    return redirect('front/pages');
});
 
Route::get('front', 'FrontController@index');  
Route::get('front/detail', 'FrontController@detail'); 
Route::get('front/rekomendasi', 'FrontController@rekomendasi'); 
Route::get('front/pages', 'FrontController@index');  
Route::get('front/about', 'FrontController@about');
Route::get('front/contact', 'FrontController@contact');

//keranjang
Route::get('front/keranjang', 'FrontController@keranjang');
Route::get('front/hapuskeranjang/{id}', 'FrontController@hapuskeranjang');
Route::get('front/checkout', 'FrontController@checkout');

Route::get('front/tambahkeranjang/{id}', 'FrontController@tambahkeranjang');
Route::get('front/kurangkeranjang/{id}', 'FrontController@kurangkeranjang');

//pesan
Route::get('front/pesan/{id}', 'FrontController@pesan');  

//history
Route::get('front/history', 'FrontController@history');


//login
Route::get('login', 'LoginController@index');  
Route::post('login/proses', 'LoginController@proses');

//register
Route::get('register', 'LoginController@register');  
Route::post('login/prosesregister', 'LoginController@prosesregister');

Route::get('login/logout', 'LoginController@logout');   



// //admin panel vue
// Route::get('dashboard', function () {
//     return view('app');
// })->where('any', '.*'); 


Route::get('jenispenyakit', function () {
    return view('app');
})->where('any', '.*'); 

Route::get('suasanahati', function () {
    return view('app');
})->where('any', '.*'); 

Route::get('menuhidangan', function () {
    return view('app');
})->where('any', '.*'); 

Route::get('menujenispenyakit', function () {
    return view('app');
})->where('any', '.*'); 

Route::get('menusuasanahati', function () {
    return view('app');
})->where('any', '.*'); 

Route::get('pesanan', function () {
    return view('app');
})->where('any', '.*'); 

Route::get('historypesanan', function () {
    return view('app');
})->where('any', '.*'); 

Route::get('datalatih', function () {
    return view('app');
})->where('any', '.*'); 

//Admin panel laravel

Route::get('/beranda', 'BerandaController@index');

Route::get('/data-karyawan', 'KaryawanController@index')->name('data-karyawan');
Route::get('/create-karyawan', 'KaryawanController@create')->name('create-karyawan');
Route::post('/simpan-karyawan', 'KaryawanController@store')->name('simpan-karyawan');
Route::get('/edit-karyawan/{id}', 'KaryawanController@edit')->name('edit-karyawan');
Route::post('/update-karyawan/{id}', 'KaryawanController@update')->name('update-karyawan');
Route::get('/delete-karyawan/{id}', 'KaryawanController@destroy')->name('delete-karyawan');

Route::get('/data-menuhidangan', 'HidanganmenuController@index')->name('data-menuhidangan');
Route::get('/create-menuhidangan', 'HidanganmenuController@create')->name('create-menuhidangan');
Route::post('/simpan-menuhidangan', 'HidanganmenuController@store')->name('simpan-menuhidangan');
Route::get('/edit-menuhidangan/{id}', 'HidanganmenuController@edit')->name('edit-menuhidangan');
Route::post('/update-menuhidangan/{id}', 'HidanganmenuController@update')->name('update-menuhidangan');
Route::get('/delete-menuhidangan/{id}', 'HidanganmenuController@destroy')->name('delete-menuhidangan');

Route::get('/data-penyakitjenis', 'PenyakitjenisController@index')->name('data-penyakitjenis');
Route::get('/create-penyakitjenis', 'PenyakitjenisController@create')->name('create-penyakitjenis');
Route::post('/simpan-penyakitjenis', 'PenyakitjenisController@store')->name('simpan-penyakitjenis');
Route::get('/edit-penyakitjenis/{id}', 'PenyakitjenisController@edit')->name('edit-penyakitjenis');
Route::post('/update-penyakitjenis/{id}', 'PenyakitjenisController@update')->name('update-penyakitjenis');
Route::get('/delete-penyakitjenis/{id}', 'PenyakitjenisController@destroy')->name('delete-penyakitjenis');

Route::get('/data-suasanahati', 'HatisuasanaController@index')->name('data-suasanahati');
Route::get('/create-suasanahati', 'HatisuasanaController@create')->name('create-suasanahati');
Route::post('/simpan-suasanahati', 'HatisuasanaController@store')->name('simpan-suasanahati');
Route::get('/edit-suasanahati/{id}', 'HatisuasanaController@edit')->name('edit-suasanahati');
Route::post('/update-suasanahati/{id}', 'HatisuasanaController@update')->name('update-suasanahati');
Route::get('/delete-suasanahati/{id}', 'HatisuasanaController@destroy')->name('delete-suasanahati');

Route::get('/data-pesanan', 'PemesananController@index')->name('data-pesanan');
Route::get('/create-pesanan', 'PemesananController@create')->name('create-pesanan');
Route::post('/simpan-pesanan', 'PemesananController@store')->name('simpan-pesanan');
Route::get('/edit-pesanan/{id}', 'PemesananController@edit')->name('edit-pesanan');
Route::post('/update-pesanan/{id}', 'PemesananController@update')->name('update-pesanan');
Route::get('/delete-pesanan/{id}', 'PemesananController@destroy')->name('delete-pesanan');

Route::get('/data-historypesanan', 'HistorypemesananController@index')->name('data-historypesanan');

Route::get('/data-datalatih', 'LatihdataController@index')->name('data-datalatih');
Route::get('/create-datalatih', 'LatihdataController@create')->name('create-datalatih');
Route::post('/simpan-datalatih', 'LatihdataController@store')->name('simpan-datalatih');
Route::get('/edit-datalatih/{id}', 'LatihdataController@edit')->name('edit-datalatih');
Route::post('/update-datalatih/{id}', 'LatihdataController@update')->name('update-datalatih');
Route::get('/delete-datalatih/{id}', 'LatihdataController@destroy')->name('delete-datalatih');

Route::get('/data-menujenispenyakit', 'JenispenyakitmenuController@index')->name('data-menujenispenyakit');
Route::get('/create-menujenispenyakit', 'JenispenyakitmenuController@create')->name('create-menujenispenyakit');
Route::post('/simpan-menujenispenyakit', 'JenispenyakitmenuController@store')->name('simpan-menujenispenyakit');
Route::get('/edit-menujenispenyakit/{id}', 'JenispenyakitmenuController@edit')->name('edit-menujenispenyakit');
Route::post('/update-menujenispenyakit/{id}', 'JenispenyakitmenuController@update')->name('update-menujenispenyakit');
Route::get('/delete-menujenispenyakit/{id}', 'JenispenyakitmenuController@destroy')->name('delete-menujenispenyakit');

Route::get('logout', 'LoginController@logout');   
