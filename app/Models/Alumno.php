<?php

namespace Intisana\Models;

use Intisana\Interfaces\EmailProviderInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * Intisana\Models\Alumno
 * @property integer $serial_alu
 * @property string $codigo_alu
 * @property string $nombre_alu
 * @property string $apellido_alu
 * @property string $fecnac_alu
 * @property string $lugar_alu
 * @property string $nacionalidad_alu
 * @property string $direcc_alu
 * @property string $telefo_alu
 * @property string $email_alu
 * @property integer $serial_usr_alu
 * @property string $foto_alu
 * @property string $activo_alu
 * @property string $gerencia_alu
 * @property integer $beca_alu
 * @property string $matricula_alu
 * @property string $cedula_alu
 * @property string $celular_alu
 * @property string $twitter_alu
 * @property string $messenger_alu
 * @property string $facebook_alu
 * @property string $ficha_alu
 * @property string $promatric_alu
 * @property string $finmatric_alu
 * @property-read mixed $email
 * @method static Builder|Alumno whereSerialAlu($value)
 * @method static Builder|Alumno whereCodigoAlu($value)
 * @method static Builder|Alumno whereNombreAlu($value)
 * @method static Builder|Alumno whereApellidoAlu($value)
 * @method static Builder|Alumno whereFecnacAlu($value)
 * @method static Builder|Alumno whereLugarAlu($value)
 * @method static Builder|Alumno whereNacionalidadAlu($value)
 * @method static Builder|Alumno whereDireccAlu($value)
 * @method static Builder|Alumno whereTelefoAlu($value)
 * @method static Builder|Alumno whereEmailAlu($value)
 * @method static Builder|Alumno whereSerialUsrAlu($value)
 * @method static Builder|Alumno whereFotoAlu($value)
 * @method static Builder|Alumno whereActivoAlu($value)
 * @method static Builder|Alumno whereGerenciaAlu($value)
 * @method static Builder|Alumno whereBecaAlu($value)
 * @method static Builder|Alumno whereMatriculaAlu($value)
 * @method static Builder|Alumno whereCedulaAlu($value)
 * @method static Builder|Alumno whereCelularAlu($value)
 * @method static Builder|Alumno whereTwitterAlu($value)
 * @method static Builder|Alumno whereMessengerAlu($value)
 * @method static Builder|Alumno whereFacebookAlu($value)
 * @method static Builder|Alumno whereFichaAlu($value)
 * @method static Builder|Alumno wherePromatricAlu($value)
 * @method static Builder|Alumno whereFinmatricAlu($value)
 */
class Alumno extends Model implements EmailProviderInterface {

	public $timestamps = false;
	protected $table = 'alumno';
	protected $primaryKey = 'serial_alu';
	protected $fillable = ['nombre_alu', 'apellido_alu', 'serial_usr_alu', 'codigo_alu', 'email_alu'];

	public function getEmailAttribute() {
		return $this->email_alu;
	}
}
