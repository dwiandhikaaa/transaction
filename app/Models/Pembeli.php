<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembeli extends Model
{
	
	use HasFactory;
 	 protected $table='pembeli';
     protected $primaryKey='id_pembeli';
     public $timestamps = false;
     protected $fillable=array('nama','alamat','no_telp');
}
