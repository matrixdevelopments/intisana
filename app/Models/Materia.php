<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model {

	public $timestamps = false;
	protected $table = 'materia';
	protected $primaryKey = 'serial_mat';
	protected $fillable = ['serial_are_mat', 'codigo_mat', 'nombre_mat', 'descripcion_mat', 'abre_mat', 'tipo_mat'];

}