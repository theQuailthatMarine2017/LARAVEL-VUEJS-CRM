<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblstafftaskassignee
 * 
 * @property int $id
 * @property int $staffid
 * @property int $taskid
 * @property int $assigned_from
 * @property bool $is_assigned_from_contact
 *
 * @package App\Models
 */
class Tblstafftaskassignee extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'staffid' => 'int',
		'taskid' => 'int',
		'assigned_from' => 'int',
		'is_assigned_from_contact' => 'bool'
	];

	protected $fillable = [
		'staffid',
		'taskid',
		'assigned_from',
		'is_assigned_from_contact'
	];
}
