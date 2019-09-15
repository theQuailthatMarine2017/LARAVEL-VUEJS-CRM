<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblnotification
 * 
 * @property int $id
 * @property int $isread
 * @property bool $isread_inline
 * @property \Carbon\Carbon $date
 * @property string $description
 * @property int $fromuserid
 * @property int $fromclientid
 * @property string $from_fullname
 * @property int $touserid
 * @property int $fromcompany
 * @property string $link
 * @property string $additional_data
 *
 * @package App\Models
 */
class Tblnotification extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'isread' => 'int',
		'isread_inline' => 'bool',
		'fromuserid' => 'int',
		'fromclientid' => 'int',
		'touserid' => 'int',
		'fromcompany' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'isread',
		'isread_inline',
		'date',
		'description',
		'fromuserid',
		'fromclientid',
		'from_fullname',
		'touserid',
		'fromcompany',
		'link',
		'additional_data'
	];
}
