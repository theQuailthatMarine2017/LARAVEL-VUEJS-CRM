<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblsurveyresultset
 * 
 * @property int $resultsetid
 * @property int $surveyid
 * @property string $ip
 * @property string $useragent
 * @property \Carbon\Carbon $date
 *
 * @package App\Models
 */
class Tblsurveyresultset extends Eloquent
{
	protected $primaryKey = 'resultsetid';
	public $timestamps = false;

	protected $casts = [
		'surveyid' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'surveyid',
		'ip',
		'useragent',
		'date'
	];
}
