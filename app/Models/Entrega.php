<?php

namespace Intisana\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * Intisana\Models\Entrega
 * @property integer $serial_tri
 * @property integer $serial_per_tri 
 * @property string $codigo_tri 
 * @property string $nombre_tri 
 * @property string $fecini_tri 
 * @property string $fecfin_tri 
 * @property string $examen_tri 
 * @property string $verexamen_tri 
 * @property string $verquim_tri 
 * @method static Builder|Entrega whereSerialTri($value)
 * @method static Builder|Entrega whereSerialPerTri($value)
 * @method static Builder|Entrega whereCodigoTri($value)
 * @method static Builder|Entrega whereNombreTri($value)
 * @method static Builder|Entrega whereFeciniTri($value)
 * @method static Builder|Entrega whereFecfinTri($value)
 * @method static Builder|Entrega whereExamenTri($value)
 * @method static Builder|Entrega whereVerexamenTri($value)
 * @method static Builder|Entrega whereVerquimTri($value)
 */
class Entrega extends Model {

	public $timestamps = false;
	protected $table = 'trimestre';
	protected $primaryKey = 'serial_tri';
	protected $fillable = ['nombre_tri', 'codigo_tri', 'fecini_tri', 'fecfin_tri', 'examen_tri', 'verexamen_tri', 'verquim_tri', 'serial_per_tri'];

}