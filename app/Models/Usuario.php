<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract {

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
		//por implementar
	}
}
