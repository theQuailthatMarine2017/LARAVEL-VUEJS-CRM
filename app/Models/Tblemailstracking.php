<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblemailstracking
 * 
 * @property int $id
 * @property string $uid
 * @property int $rel_id
 * @property string $rel_type
 * @property \Carbon\Carbon $date
 * @property string $email
 * @property bool $opened
 * @property \Carbon\Carbon $date_opened
 * @property string $subject
 *
 * @package App\Models
 */
class Tblemailstracking extends Eloquent
{
	protected $table = 'tblemailstracking';
	public $timestamps = false;

	protected $casts = [
		'rel_id' => 'int',
		'opened' => 'bool'
	];

	protected $dates = [
		'date',
		'date_opened'
	];

	protected $fillable = [
		'uid',
		'rel_id',
		'rel_type',
		'date',
		'email',
		'opened',
		'date_opened',
		'subject'
	];
}
