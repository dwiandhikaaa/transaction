<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengguna extends Model
{	
	use HasFactory;
     protected $table='user';
     protected $primaryKey='id_user';
     public $timestamps = false;

     protected $fillable=array('username','password','level');
}


