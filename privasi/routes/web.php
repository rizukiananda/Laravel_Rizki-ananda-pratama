<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('home');
	return view('home');
});
Route::get('/read', 'Crudcontroller@lihatdata');
Route::get('/pegawai', 'Crudcontroller@lihatdatapegawai');
Route::get('/tpp',function () {
	$data=DB::table('pegawai')->get();
	return View::make('tpp')->with('tpp',$data);
	//return view('tpp');
});
Route::get('/tambah',function () {
	return view('tp');
});
Route::post('prosestambah','Crudcontroller@tambahdata');
Route::post('prosestambahpegawai','Crudcontroller@tambahdatapegawai');
Route::get('/formedit/{id}', 'Crudcontroller@editdata');
Route::get('/hapus/{id}', 'Crudcontroller@hapusdata');
Route::get('/hapus2/{id}', 'Crudcontroller@hapusdata2');
Route::get('/formeditpegawai/{id}', 'Crudcontroller@editdatapegawai');
Route::post('/proseseditpegawai', 'Crudcontroller@proseseditp');
