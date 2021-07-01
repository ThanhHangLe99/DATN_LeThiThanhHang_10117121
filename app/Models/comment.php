<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table="comment";
    public function tintuc(){
    	return $this->belongsTo('App\tintuc','idTinTuc','id');
    }
    public function user(){
    	return $this->belongsTo('App\User','idUser','id');
    }

}
