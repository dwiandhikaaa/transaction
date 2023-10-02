<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
	 use HasFactory;
    protected $table='jenis';
     protected $primaryKey='id_jenis';
     public $timestamps = false;

     protected $fillable=array('nama_jenis');

    public function Barang(){
          return $this->hasMany('App\Models\Barang','id_barang');
}
}