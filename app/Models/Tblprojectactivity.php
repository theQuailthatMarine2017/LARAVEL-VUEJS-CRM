<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblprojectactivity
 * 
 * @property int $id
 * @property int $project_id
 * @property int $staff_id
 * @property int $contact_id
 * @property string $fullname
 * @property int $visible_to_customer
 * @property string $description_key
 * @property string $additional_data
 * @property \Carbon\Carbon $dateadded
 *
 * @package App\Models
 */
class Tblprojectactivity extends Eloquent
{
	protected $table = 'tblprojectactivity';
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'staff_id' => 'int',
		'contact_id' => 'int',
		'visible_to_customer' => 'int'
	];

	protected $dates = [
		'dateadded'
	];

	protected $fillable = [
		'project_id',
		'staff_id',
		'contact_id',
		'fullname',
		'visible_to_customer',
		'description_key',
		'additional_data',
		'dateadded'
	];
}
