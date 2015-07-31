<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model {

	public $timestamps = false;
	protected $table = 'trimestre';
	protected $primaryKey = 'serial_tri';
	protected $fillable = ['nombre_tri', 'codigo_tri', 'fecini_tri', 'fecfin_tri', 'examen_tri', 'verexamen_tri', 'verquim_tri', 'serial_per_tri'];

}