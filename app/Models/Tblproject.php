<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblproject
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $status
 * @property int $clientid
 * @property int $billing_type
 * @property \Carbon\Carbon $start_date
 * @property \Carbon\Carbon $deadline
 * @property \Carbon\Carbon $project_created
 * @property \Carbon\Carbon $date_finished
 * @property int $progress
 * @property int $progress_from_tasks
 * @property float $project_cost
 * @property float $project_rate_per_hour
 * @property float $estimated_hours
 * @property int $addedfrom
 *
 * @package App\Models
 */
class Tblproject extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'clientid' => 'int',
		'billing_type' => 'int',
		'progress' => 'int',
		'progress_from_tasks' => 'int',
		'project_cost' => 'float',
		'project_rate_per_hour' => 'float',
		'estimated_hours' => 'float',
		'addedfrom' => 'int'
	];

	protected $dates = [
		'start_date',
		'deadline',
		'project_created',
		'date_finished'
	];

	protected $fillable = [
		'name',
		'description',
		'status',
		'clientid',
		'billing_type',
		'start_date',
		'deadline',
		'project_created',
		'date_finished',
		'progress',
		'progress_from_tasks',
		'project_cost',
		'project_rate_per_hour',
		'estimated_hours',
		'addedfrom'
	];
}
