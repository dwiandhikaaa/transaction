<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
      use HasFactory;
     protected $table='barang';
     protected $primaryKey='id_barang';
     public $timestamps = false;
     protected $fillable=array('nama_barang','harga','stok','tgl_expired','id_jenis');

     public function Jenis(){
          return $this->belongsTo('App\Models\Jenis','id_jenis');

     }
     public function Detail_penjualan(){
          return $this->hasMany('App\Models\Detail_penjualan','id_detail_penjualan');
     }
}
