<?php

namespace App\Models;

use App\Interfaces\EmailProviderInterface;
use Illuminate\Database\Eloquent\Model;

class Familia extends Model implements EmailProviderInterface {

	public $timestamps = false;
	protected $table = 'padre_familia';
	protected $primaryKey = 'serial_paf';
	protected $fillable = ['codigo_paf', 'nombre_paf', 'apellido_paf', 'email_paf', 'nombrem_paf', 'apellidom_paf', 'emailm_paf'];

	public function getEmailAttribute() {
		$mails = [$this->email_paf, $this->emailm_paf];

		return implode(',', $mails);
	}
}