<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblannouncement
 * 
 * @property int $announcementid
 * @property string $name
 * @property string $message
 * @property int $showtousers
 * @property int $showtostaff
 * @property int $showname
 * @property \Carbon\Carbon $dateadded
 * @property string $userid
 *
 * @package App\Models
 */
class Tblannouncement extends Eloquent
{
	protected $primaryKey = 'announcementid';
	public $timestamps = false;

	protected $casts = [
		'showtousers' => 'int',
		'showtostaff' => 'int',
		'showname' => 'int'
	];

	protected $dates = [
		'dateadded'
	];

	protected $fillable = [
		'name',
		'message',
		'showtousers',
		'showtostaff',
		'showname',
		'dateadded',
		'userid'
	];
}
