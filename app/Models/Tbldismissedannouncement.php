<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tbldismissedannouncement
 * 
 * @property int $dismissedannouncementid
 * @property int $announcementid
 * @property int $staff
 * @property int $userid
 *
 * @package App\Models
 */
class Tbldismissedannouncement extends Eloquent
{
	protected $primaryKey = 'dismissedannouncementid';
	public $timestamps = false;

	protected $casts = [
		'announcementid' => 'int',
		'staff' => 'int',
		'userid' => 'int'
	];

	protected $fillable = [
		'announcementid',
		'staff',
		'userid'
	];
}
