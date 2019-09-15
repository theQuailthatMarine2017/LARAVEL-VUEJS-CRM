<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblmilestone
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property bool $description_visible_to_customer
 * @property \Carbon\Carbon $due_date
 * @property int $project_id
 * @property string $color
 * @property int $milestone_order
 * @property \Carbon\Carbon $datecreated
 *
 * @package App\Models
 */
class Tblmilestone extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'description_visible_to_customer' => 'bool',
		'project_id' => 'int',
		'milestone_order' => 'int'
	];

	protected $dates = [
		'due_date',
		'datecreated'
	];

	protected $fillable = [
		'name',
		'description',
		'description_visible_to_customer',
		'due_date',
		'project_id',
		'color',
		'milestone_order',
		'datecreated'
	];
}
