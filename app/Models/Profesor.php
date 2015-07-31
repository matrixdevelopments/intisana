<?php

namespace Intisana\Models;

use Intisana\Interfaces\EmailProviderInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * Intisana\Models\Profesor
 * @property integer $serial_pro
 * @property string $nombre_pro
 * @property string $apellido_pro
 * @property string $direcc_pro
 * @property string $telefo_pro
 * @property string $celu_pro
 * @property string $empresacel_pro
 * @property string $cedula_pro
 * @property string $profes_pro
 * @property string $email_pro
 * @property string $emailc_pro
 * @property integer $serial_usr_pro
 * @property string $fecnac_pro
 * @property string $nacionalidad_pro
 * @property string $cargo_pro
 * @property string $permiso_pro
 * @property integer $ciclo_pro
 * @property integer $perfil_pro
 * @property string $dirigente_pro
 * @property integer $carga_pro
 * @property string $activo_pro
 * @property string $foto_pro
 * @property string $elegible_pro
 * @property string $dedicacion_pro
 * @property string $observacion_pro
 * @property-read mixed $email
 * @method static Builder|Profesor whereSerialPro($value)
 * @method static Builder|Profesor whereNombrePro($value)
 * @method static Builder|Profesor whereApellidoPro($value)
 * @method static Builder|Profesor whereDireccPro($value)
 * @method static Builder|Profesor whereTelefoPro($value)
 * @method static Builder|Profesor whereCeluPro($value)
 * @method static Builder|Profesor whereEmpresacelPro($value)
 * @method static Builder|Profesor whereCedulaPro($value)
 * @method static Builder|Profesor whereProfesPro($value)
 * @method static Builder|Profesor whereEmailPro($value)
 * @method static Builder|Profesor whereEmailcPro($value)
 * @method static Builder|Profesor whereSerialUsrPro($value)
 * @method static Builder|Profesor whereFecnacPro($value)
 * @method static Builder|Profesor whereNacionalidadPro($value)
 * @method static Builder|Profesor whereCargoPro($value)
 * @method static Builder|Profesor wherePermisoPro($value)
 * @method static Builder|Profesor whereCicloPro($value)
 * @method static Builder|Profesor wherePerfilPro($value)
 * @method static Builder|Profesor whereDirigentePro($value)
 * @method static Builder|Profesor whereCargaPro($value)
 * @method static Builder|Profesor whereActivoPro($value)
 * @method static Builder|Profesor whereFotoPro($value)
 * @method static Builder|Profesor whereElegiblePro($value)
 * @method static Builder|Profesor whereDedicacionPro($value)
 * @method static Builder|Profesor whereObservacionPro($value)
 */
class Profesor extends Model implements EmailProviderInterface {

	public $timestamps = false;
	protected $table = 'profesor';
	protected $primaryKey = 'serial_pro';
	protected $fillable = ['nombre_pro', 'apellido_pro', 'serial_usr_pro', 'email_pro'];

	public function getEmailAttribute() {
		return $this->email_pro;
	}
}