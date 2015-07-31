<?php

namespace Intisana\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * Intisana\Models\Materia
 * @property integer $serial_mat
 * @property integer $serial_are_mat
 * @property string $codigo_mat
 * @property string $nombre_mat
 * @property string $descripcion_mat
 * @property string $abre_mat
 * @property string $tipo_mat
 * @method static Builder|Materia whereSerialMat($value)
 * @method static Builder|Materia whereSerialAreMat($value)
 * @method static Builder|Materia whereCodigoMat($value)
 * @method static Builder|Materia whereNombreMat($value)
 * @method static Builder|Materia whereDescripcionMat($value)
 * @method static Builder|Materia whereAbreMat($value)
 * @method static Builder|Materia whereTipoMat($value)
 */
class Materia extends Model {

	public $timestamps = false;
	protected $table = 'materia';
	protected $primaryKey = 'serial_mat';
	protected $fillable = ['serial_are_mat', 'codigo_mat', 'nombre_mat', 'descripcion_mat', 'abre_mat', 'tipo_mat'];

}