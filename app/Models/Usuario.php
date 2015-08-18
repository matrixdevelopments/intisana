<?php

namespace Intisana\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * Intisana\Models\Usuario
 * @property integer $serial_usr
 * @property string $login_usr
 * @property string $passw_usr
 * @property string $tipo_usr
 * @property string $rev_usr
 * @property string $ingreso_usr
 * @property-read Profesor|Alumno|Familia $perfil
 * @property-read string $email
 * @method static Builder|Usuario whereSerialUsr($value)
 * @method static Builder|Usuario whereLoginUsr($value)
 * @method static Builder|Usuario wherePasswUsr($value)
 * @method static Builder|Usuario whereTipoUsr($value)
 * @method static Builder|Usuario whereRevUsr($value)
 * @method static Builder|Usuario whereIngresoUsr($value)
 */
class  Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract {

	/**
	 * Tabla de la base de datos usada en el Modelo
	 * @var string
	 */
	protected $table = 'usuario';

	/**
	 * Llave primaria para el modelo.
	 * @var string
	 */
	protected $primaryKey = 'serial_usr';

	/**
	 * Los atributos que son accesibles.
	 * @var array
	 */
	protected $fillable = ['serial_usr', 'login_usr', 'passw_usr', 'tipo_usr', 'rev_usr', 'ingreso_usr'];

	/**
	 * Los atributos excluidos del modelo JSON.
	 * @var array
	 */
	protected $hidden = ['passw_usr', 'remember_token'];

	public $timestamps = false;

	public function perfil() {
		switch($this->tipo_usr)
		{
			case 1:
				return $this->hasOne('Intisana\Models\Profesor', 'serial_usr_pro', 'serial_usr');
			case 2:
				return $this->hasOne('Intisana\Models\Alumno', 'serial_usr_alu', 'serial_usr');
			case 3:
				return $this->hasOne('Intisana\Models\Familia', 'serial_usr_paf', 'serial_usr');
		}
	}

	/**
	 * M�todo m�gico para obtener el email
	 * @return string
	 */
	public function getEmailAttribute() {
		return $this->perfil->email;
	}

	/**
	 * Obtener el identificador �nico para el usuario.
	 * @return mixed
	 */
	public function getAuthIdentifier() {
		return $this->getKey();
	}

	/**
	 * Obtener la contrase�a para el usuario.
	 * @return string
	 */
	public function getAuthPassword() {
		return $this->passw_usr;
	}

	/**
	 * Obtener el valor simb�lico "acu�rdate de m�" para la sesi�n.
	 * @return string
	 */
	public function getRememberToken() {
		return $this->{$this->getRememberTokenName()};
	}

	/**
	 * Definir el valor simb�lico "acu�rdate de m�" para la sesi�n.
	 * @param  string $value
	 * @return void
	 */
	public function setRememberToken($value) {
		$this->{$this->getRememberTokenName()} = $value;
	}

	/**
	 * Obtener el nombre de la columna para el token "remember me".
	 * @return string
	 */
	public function getRememberTokenName() {
		return 'remember_token';
	}

	/**
	 * Obtener la direcci�n de correo electr�nico a donde se env�an enlaces de restablecimiento de contrase�a.
	 * @return string
	 */
	public function getEmailForPasswordReset() {
		$this->email;
	}
}
