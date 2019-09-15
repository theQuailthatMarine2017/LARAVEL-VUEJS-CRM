<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblevent
 * 
 * @property int $eventid
 * @property string $title
 * @property string $description
 * @property int $userid
 * @property \Carbon\Carbon $start
 * @property \Carbon\Carbon $end
 * @property int $public
 * @property string $color
 * @property bool $isstartnotified
 * @property int $reminder_before
 * @property string $reminder_before_type
 *
 * @package App\Models
 */
class Tblevent extends Eloquent
{
	protected $primaryKey = 'eventid';
	public $timestamps = false;

	protected $casts = [
		'userid' => 'int',
		'public' => 'int',
		'isstartnotified' => 'bool',
		'reminder_before' => 'int'
	];

	protected $dates = [
		'start',
		'end'
	];

	protected $fillable = [
		'title',
		'description',
		'userid',
		'start',
		'end',
		'public',
		'color',
		'isstartnotified',
		'reminder_before',
		'reminder_before_type'
	];
}
