<?php

namespace App\Models;

use App\Interfaces\EmailProviderInterface;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model implements EmailProviderInterface {

	public $timestamps = false;
	protected $table = 'profesor';
	protected $primaryKey = 'serial_pro';
	protected $fillable = ['nombre_pro', 'apellido_pro', 'serial_usr_pro', 'email_pro'];

	public function getEmailAttribute() {
		return $this->email_pro;
	}
}