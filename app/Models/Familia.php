<?php

namespace Intisana\Models;

use Intisana\Interfaces\EmailProviderInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * Intisana\Models\Familia
 * @property integer $serial_paf
 * @property string $codigo_paf
 * @property string $nombre_paf
 * @property string $apellido_paf
 * @property string $direcc_paf
 * @property string $telefo_paf
 * @property string $email_paf
 * @property string $emailm_paf
 * @property string $profp_paf
 * @property string $profm_paf
 * @property string $cargo_paf
 * @property string $lugartr_paf
 * @property string $ocupacionp_paf
 * @property string $telefotr_paf
 * @property string $direcctr_paf
 * @property string $ocupacionm_paf
 * @property string $telefotrm_paf
 * @property string $direcctrm_paf
 * @property integer $serial_usr_paf
 * @property string $paren_paf
 * @property string $telfcel_paf
 * @property string $telfcelm_paf
 * @property string $empresacel_paf
 * @property string $empresacelm_paf
 * @property string $fecnac_paf
 * @property string $nombrem_paf
 * @property string $apellidom_paf
 * @property string $aceptamsj_paf
 * @property string $foto_paf
 * @property string $parroquiap_paf
 * @property string $direccm_paf
 * @property string $parroquiam_paf
 * @property string $tiporepresentante_paf
 * @property string $representante_paf
 * @property string $direccr_paf
 * @property string $nhermanos_paf
 * @property string $llamaremerg_paf
 * @property string $telefoemerg_paf
 * @property string $celularemerg_paf
 * @property string $emailemerg_paf
 * @property string $twitter_paf
 * @property string $messenger_paf
 * @property string $facebook_paf
 * @property string $twitterm_paf
 * @property string $messengerm_paf
 * @property string $facebookm_paf
 * @property string $twitteremerg_paf
 * @property string $messengeremerg_paf
 * @property string $facebookemerg_paf
 * @property string $app_paf
 * @property string $cedula_paf
 * @property string $cedulam_paf
 * @property string $lugartrm_paf
 * @property string $cargom_paf
 * @property-read mixed $email
 * @method static Builder|Familia whereSerialPaf($value)
 * @method static Builder|Familia whereCodigoPaf($value)
 * @method static Builder|Familia whereNombrePaf($value)
 * @method static Builder|Familia whereApellidoPaf($value)
 * @method static Builder|Familia whereDireccPaf($value)
 * @method static Builder|Familia whereTelefoPaf($value)
 * @method static Builder|Familia whereEmailPaf($value)
 * @method static Builder|Familia whereEmailmPaf($value)
 * @method static Builder|Familia whereProfpPaf($value)
 * @method static Builder|Familia whereProfmPaf($value)
 * @method static Builder|Familia whereCargoPaf($value)
 * @method static Builder|Familia whereLugartrPaf($value)
 * @method static Builder|Familia whereOcupacionpPaf($value)
 * @method static Builder|Familia whereTelefotrPaf($value)
 * @method static Builder|Familia whereDirecctrPaf($value)
 * @method static Builder|Familia whereOcupacionmPaf($value)
 * @method static Builder|Familia whereTelefotrmPaf($value)
 * @method static Builder|Familia whereDirecctrmPaf($value)
 * @method static Builder|Familia whereSerialUsrPaf($value)
 * @method static Builder|Familia whereParenPaf($value)
 * @method static Builder|Familia whereTelfcelPaf($value)
 * @method static Builder|Familia whereTelfcelmPaf($value)
 * @method static Builder|Familia whereEmpresacelPaf($value)
 * @method static Builder|Familia whereEmpresacelmPaf($value)
 * @method static Builder|Familia whereFecnacPaf($value)
 * @method static Builder|Familia whereNombremPaf($value)
 * @method static Builder|Familia whereApellidomPaf($value)
 * @method static Builder|Familia whereAceptamsjPaf($value)
 * @method static Builder|Familia whereFotoPaf($value)
 * @method static Builder|Familia whereParroquiapPaf($value)
 * @method static Builder|Familia whereDireccmPaf($value)
 * @method static Builder|Familia whereParroquiamPaf($value)
 * @method static Builder|Familia whereTiporepresentantePaf($value)
 * @method static Builder|Familia whereRepresentantePaf($value)
 * @method static Builder|Familia whereDireccrPaf($value)
 * @method static Builder|Familia whereNhermanosPaf($value)
 * @method static Builder|Familia whereLlamaremergPaf($value)
 * @method static Builder|Familia whereTelefoemergPaf($value)
 * @method static Builder|Familia whereCelularemergPaf($value)
 * @method static Builder|Familia whereEmailemergPaf($value)
 * @method static Builder|Familia whereTwitterPaf($value)
 * @method static Builder|Familia whereMessengerPaf($value)
 * @method static Builder|Familia whereFacebookPaf($value)
 * @method static Builder|Familia whereTwittermPaf($value)
 * @method static Builder|Familia whereMessengermPaf($value)
 * @method static Builder|Familia whereFacebookmPaf($value)
 * @method static Builder|Familia whereTwitteremergPaf($value)
 * @method static Builder|Familia whereMessengeremergPaf($value)
 * @method static Builder|Familia whereFacebookemergPaf($value)
 * @method static Builder|Familia whereAppPaf($value)
 * @method static Builder|Familia whereCedulaPaf($value)
 * @method static Builder|Familia whereCedulamPaf($value)
 * @method static Builder|Familia whereLugartrmPaf($value)
 * @method static Builder|Familia whereCargomPaf($value)
 */
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