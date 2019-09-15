<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblsurveysendlog
 * 
 * @property int $id
 * @property int $surveyid
 * @property int $total
 * @property \Carbon\Carbon $date
 * @property int $iscronfinished
 * @property string $send_to_mail_lists
 *
 * @package App\Models
 */
class Tblsurveysendlog extends Eloquent
{
	protected $table = 'tblsurveysendlog';
	public $timestamps = false;

	protected $casts = [
		'surveyid' => 'int',
		'total' => 'int',
		'iscronfinished' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'surveyid',
		'total',
		'date',
		'iscronfinished',
		'send_to_mail_lists'
	];
}
