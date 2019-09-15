<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tbltaskstimer
 * 
 * @property int $id
 * @property int $task_id
 * @property string $start_time
 * @property string $end_time
 * @property int $staff_id
 * @property float $hourly_rate
 * @property string $note
 *
 * @package App\Models
 */
class Tbltaskstimer extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'task_id' => 'int',
		'staff_id' => 'int',
		'hourly_rate' => 'float'
	];

	protected $fillable = [
		'task_id',
		'start_time',
		'end_time',
		'staff_id',
		'hourly_rate',
		'note'
	];
}
