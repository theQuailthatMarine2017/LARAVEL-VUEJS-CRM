<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblprojectdiscussion
 * 
 * @property int $id
 * @property int $project_id
 * @property string $subject
 * @property string $description
 * @property bool $show_to_customer
 * @property \Carbon\Carbon $datecreated
 * @property \Carbon\Carbon $last_activity
 * @property int $staff_id
 * @property int $contact_id
 *
 * @package App\Models
 */
class Tblprojectdiscussion extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'show_to_customer' => 'bool',
		'staff_id' => 'int',
		'contact_id' => 'int'
	];

	protected $dates = [
		'datecreated',
		'last_activity'
	];

	protected $fillable = [
		'project_id',
		'subject',
		'description',
		'show_to_customer',
		'datecreated',
		'last_activity',
		'staff_id',
		'contact_id'
	];
}
