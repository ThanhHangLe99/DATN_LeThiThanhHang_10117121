<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    use HasFactory;
    protected $table="tintuc";
	public function chuyenmuc(){
		return $this->belongsTo('App\Models\chuyenmuc','Id_ChuyenMuc','ID');
	}
	public function comment(){
		return $this->hasMany('App\Models\comment','idTinTuc','id');
	}
}
