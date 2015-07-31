<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model {

	public $timestamps = false;
	protected $table = 'alumno';
	protected $primaryKey = 'serial_alu';
	protected $fillable = ['nombre_alu', 'apellido_alu', 'serial_usr_alu', 'codigo_alu', 'email_alu'];
}
