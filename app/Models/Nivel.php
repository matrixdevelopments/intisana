<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model {

	public $timestamps = false;
	protected $table = 'nivel';
	protected $primaryKey = 'serial_niv';
	protected $fillable = ['serial_sec_niv', 'serial_esp_niv', 'codigo_niv', 'nombre_niv', 'ciclo_niv', 'edad_niv', 'enombre_niv', 'mopcional_niv'];

}