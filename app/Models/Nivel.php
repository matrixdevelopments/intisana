<?php

namespace Intisana\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Intisana\Models\Nivel
 *
 * @property integer $serial_niv 
 * @property integer $serial_sec_niv 
 * @property integer $serial_esp_niv 
 * @property string $codigo_niv 
 * @property string $nombre_niv 
 * @property integer $ciclo_niv 
 * @property integer $edad_niv 
 * @property string $enombre_niv 
 * @property string $mopcional_niv 
 * @method static \Illuminate\Database\Query\Builder|\Intisana\Models\Nivel whereSerialNiv($value)
 * @method static \Illuminate\Database\Query\Builder|\Intisana\Models\Nivel whereSerialSecNiv($value)
 * @method static \Illuminate\Database\Query\Builder|\Intisana\Models\Nivel whereSerialEspNiv($value)
 * @method static \Illuminate\Database\Query\Builder|\Intisana\Models\Nivel whereCodigoNiv($value)
 * @method static \Illuminate\Database\Query\Builder|\Intisana\Models\Nivel whereNombreNiv($value)
 * @method static \Illuminate\Database\Query\Builder|\Intisana\Models\Nivel whereCicloNiv($value)
 * @method static \Illuminate\Database\Query\Builder|\Intisana\Models\Nivel whereEdadNiv($value)
 * @method static \Illuminate\Database\Query\Builder|\Intisana\Models\Nivel whereEnombreNiv($value)
 * @method static \Illuminate\Database\Query\Builder|\Intisana\Models\Nivel whereMopcionalNiv($value)
 */
class Nivel extends Model {

	public $timestamps = false;
	protected $table = 'nivel';
	protected $primaryKey = 'serial_niv';
	protected $fillable = ['serial_sec_niv', 'serial_esp_niv', 'codigo_niv', 'nombre_niv', 'ciclo_niv', 'edad_niv', 'enombre_niv', 'mopcional_niv'];

}