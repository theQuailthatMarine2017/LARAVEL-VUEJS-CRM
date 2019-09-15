<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblknowledgebasearticleanswer
 * 
 * @property int $articleanswerid
 * @property int $articleid
 * @property int $answer
 * @property string $ip
 * @property \Carbon\Carbon $date
 *
 * @package App\Models
 */
class Tblknowledgebasearticleanswer extends Eloquent
{
	protected $primaryKey = 'articleanswerid';
	public $timestamps = false;

	protected $casts = [
		'articleid' => 'int',
		'answer' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'articleid',
		'answer',
		'ip',
		'date'
	];
}
