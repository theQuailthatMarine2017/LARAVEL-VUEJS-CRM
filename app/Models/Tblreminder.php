<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblreminder
 * 
 * @property int $id
 * @property string $description
 * @property \Carbon\Carbon $date
 * @property int $isnotified
 * @property int $rel_id
 * @property int $staff
 * @property string $rel_type
 * @property int $notify_by_email
 * @property int $creator
 *
 * @package App\Models
 */
class Tblreminder extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'isnotified' => 'int',
		'rel_id' => 'int',
		'staff' => 'int',
		'notify_by_email' => 'int',
		'creator' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'description',
		'date',
		'isnotified',
		'rel_id',
		'staff',
		'rel_type',
		'notify_by_email',
		'creator'
	];
}
