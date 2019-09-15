<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblgoal
 * 
 * @property int $id
 * @property string $subject
 * @property string $description
 * @property \Carbon\Carbon $start_date
 * @property \Carbon\Carbon $end_date
 * @property int $goal_type
 * @property int $contract_type
 * @property int $achievement
 * @property bool $notify_when_fail
 * @property bool $notify_when_achieve
 * @property int $notified
 * @property int $staff_id
 *
 * @package App\Models
 */
class Tblgoal extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'goal_type' => 'int',
		'contract_type' => 'int',
		'achievement' => 'int',
		'notify_when_fail' => 'bool',
		'notify_when_achieve' => 'bool',
		'notified' => 'int',
		'staff_id' => 'int'
	];

	protected $dates = [
		'start_date',
		'end_date'
	];

	protected $fillable = [
		'subject',
		'description',
		'start_date',
		'end_date',
		'goal_type',
		'contract_type',
		'achievement',
		'notify_when_fail',
		'notify_when_achieve',
		'notified',
		'staff_id'
	];
}
