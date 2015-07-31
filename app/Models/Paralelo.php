<?php

namespace Intisana\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Intisana\Models\Paralelo
 *
 * @property integer $serial_par 
 * @property integer $serial_niv_par 
 * @property integer $serial_per_par 
 * @property string $nombre_par 
 * @property integer $serial_pro_par 
 * @property string $nivel_par 
 * @method static \Illuminate\Database\Query\Builder|\Intisana\Models\Paralelo whereSerialPar($value)
 * @method static \Illuminate\Database\Query\Builder|\Intisana\Models\Paralelo whereSerialNivPar($value)
 * @method static \Illuminate\Database\Query\Builder|\Intisana\Models\Paralelo whereSerialPerPar($value)
 * @method static \Illuminate\Database\Query\Builder|\Intisana\Models\Paralelo whereNombrePar($value)
 * @method static \Illuminate\Database\Query\Builder|\Intisana\Models\Paralelo whereSerialProPar($value)
 * @method static \Illuminate\Database\Query\Builder|\Intisana\Models\Paralelo whereNivelPar($value)
 */
class Paralelo extends Model {

	public $timestamps = false;
	protected $table = 'paralelo';
	protected $primaryKey = 'serial_par';
	protected $fillable = ['serial_niv_par', 'serial_per_par', 'nombre_par', 'serial_pro_par', 'nivel_par'];

}