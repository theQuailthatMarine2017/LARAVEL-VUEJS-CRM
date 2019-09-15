<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblleadsemailintegrationemail
 * 
 * @property int $id
 * @property string $subject
 * @property string $body
 * @property \Carbon\Carbon $dateadded
 * @property int $leadid
 * @property int $emailid
 *
 * @package App\Models
 */
class Tblleadsemailintegrationemail extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'leadid' => 'int',
		'emailid' => 'int'
	];

	protected $dates = [
		'dateadded'
	];

	protected $fillable = [
		'subject',
		'body',
		'dateadded',
		'leadid',
		'emailid'
	];
}
