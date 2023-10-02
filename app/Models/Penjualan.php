<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penjualan extends Model
{
		
	use HasFactory;
    protected $table = 'Penjualan';
    protected $primaryKey ='id_penjualan';
    public $timestamps =false;

    public function detail_penjualan(){
        return $this->hasMany('App\Models\Detail_penjualan','id_detail_penjualan');
    }

  
  
}
