<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use View;
use DB;
use Redirect;
use Auth;

class Crudcontroller extends Controller
{
    //
	public function lihatdata(){
	$data= DB::select( DB::raw("SELECT * FROM tpp t,pegawai p where t.nip=p.nip"));;
	
	//$data=DB::table('tpp')->get();
	return View::make('read')->with('tpp',$data);
	}
	
	public function lihatdatapegawai(){
	
	$data=DB::table('pegawai')->get();
	return View::make('pegawai')->with('pegawai',$data);
	}
	
	public function tambahdata(){
	$data=array(
		'nip' => Input::get('nip'),
		'tppmax' => Input::get('tppmax'),
		'tahun' => Input::get('tahun'),
		'bulan' => Input::get('bulan'),
		'jhk' => Input::get('jhk'),
		'hadir' => Input::get('hadir'),
		'izin' => Input::get('izin'),
		'sakit' => Input::get('sakit'),
		'cuti' => Input::get('cuti'),
		'tas' => Input::get('tas'),
		'terlambat' => Input::get('terlambat'),
		'cepatpulang' => Input::get('cepatpulang'),
		'uwas' => Input::get('uwas'),
		'upacara' => Input::get('upacara'),
		'wirid' => Input::get('wirid'),
		'apel' => Input::get('apel'),
		'senam' => Input::get('senam'),
		'skp' => Input::get('skp'),
		'orientasip' => Input::get('orientasip'),
		'integritas' => Input::get('integritas'),
		'kerjasama' => Input::get('kerjasama'),
		'kepemimpinan' => Input::get('kepemimpinan'),
		'lkh' => Input::get('lkh'),
		'sop' => Input::get('sop')
	);
	DB::table('tpp')->insert($data);
	return Redirect::to('/read')->with('message','berhasil menambah data');
	}
	
	public function tambahdatapegawai(){
	$data=array(
		'nama' => Input::get('nama'),
		'nip' => Input::get('nip'),
		'pangkat' => Input::get('pangkat'),
		'jbt' => Input::get('jbt')
	);
	DB::table('pegawai')->insert($data);
	return Redirect::to('/pegawai')->with('message','berhasil menambah data');
	}
	
	public function editdata($id){
	
	$data=DB::table('tpp')->where('nip','=',$id)->first();
	$data2=DB::table('pegawai')->where('nip','=',$id)->first();
	$nama=$data2->nama;
	$pangkat=$data2->pangkat;
	$jbt=$data2->jbt;
	//$data= DB::select( DB::raw("SELECT * FROM tpp t,pegawai p where t.nip=p.nip"));
	$disiplin=($data->hadir/$data->jhk)*100;
	$komitmen=(($data->upacara+$data->wirid+$data->apel+$data->senam)/$data->uwas)*100;
if($data->skp>=76){
	$skp=100;
	}elseif($data->skp>=51){
	$skp=75;	
	}elseif($data->skp>=26){
		$skp=50;
	}else{
		$skp=0;
	}
	
	$pk=(0.2*$data->orientasip)+(0.2*$data->integritas)+(0.2*$komitmen)+(0.2*$disiplin)+(0.1*$data->kerjasama)+(0.1*$data->kepemimpinan);
	$ppk=0.6*$skp+0.4*$pk;
	
	$kehadiran=(0.3*$data->tppmax)-(0.05*$data->tas+0.03*$data->izin+0.03*(($data->terlambat+$data->cepatpulang)/300))*0.3*$data->tppmax;
	$kinerja=(0.7*($ppk/100)*0.7*$data->tppmax)+(0.2*($data->jhk)*0.7*$data->tppmax)+(0.1*(($data->sop)/100));
	$tppb=$kehadiran+$kinerja;
		

	return View::make('form_edit', compact('disiplin','komitmen','uwas','tppb','kehadiran','kinerja','ppk','skp','pk','nama','pangkat','jbt'))->with('tpp',$data);
	}
	
	public function hapusdata($id){
	DB::table('pegawai')->where('nip','=',$id)->delete();
	return Redirect::to('/pegawai')->with('message','berhasil menghapus data');
	}
	public function hapusdata2($id){
	DB::table('tpp')->where('nip','=',$id)->delete();
	return Redirect::to('/read')->with('message','berhasil menghapus data');
	}
	
	public function editdatapegawai($id){
	
	$data=DB::table('pegawai')->where('nip','=',$id)->first();
	return View::make('form_edit_pegawai')->with('pegawai',$data);
	}
	
	public function proseseditp(){
	$data=array(
		'nama' => Input::get('nama'),
		'pangkat' => Input::get('pangkat'),
		'jbt' => Input::get('jbt')
	);
	DB::table('pegawai')->where('nip','=',Input::get('nip'))->update($data);
	return Redirect::to('/pegawai')->with('message','berhasil mengubah data');
	}
}