<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblsurveysemailsendcron
 * 
 * @property int $id
 * @property int $surveyid
 * @property string $email
 * @property int $emailid
 * @property string $listid
 * @property int $log_id
 *
 * @package App\Models
 */
class Tblsurveysemailsendcron extends Eloquent
{
	protected $table = 'tblsurveysemailsendcron';
	public $timestamps = false;

	protected $casts = [
		'surveyid' => 'int',
		'emailid' => 'int',
		'log_id' => 'int'
	];

	protected $fillable = [
		'surveyid',
		'email',
		'emailid',
		'listid',
		'log_id'
	];
}
