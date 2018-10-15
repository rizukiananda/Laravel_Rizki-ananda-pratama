<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tpp extends Model
{
    //
    protected $table = 'tpp';
/*
    protected $fillable = [
        'user_id', 'title', 'content', 'updated_at'
    ];
*/
 	public function pegawai(){
 		//Query Builder
 		//return User::where('id_user', $this->id_user)->first()->name;
 		//ORM
 		return $this->belongsTo('App\Pegawai', 'nip', 'nip');
 	}
}
