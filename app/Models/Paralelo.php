<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paralelo extends Model {

	public $timestamps = false;
	protected $table = 'paralelo';
	protected $primaryKey = 'serial_par';
	protected $fillable = ['serial_niv_par', 'serial_per_par', 'nombre_par', 'serial_pro_par', 'nivel_par'];

}