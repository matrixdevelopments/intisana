<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model {

	public $timestamps = false;
	protected $table = 'profesor';
	protected $primaryKey = 'serial_pro';
	protected $fillable = ['nombre_pro', 'apellido_pro', 'serial_usr_pro', 'email_pro'];

}