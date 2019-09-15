<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblprojectmember
 * 
 * @property int $id
 * @property int $project_id
 * @property int $staff_id
 *
 * @package App\Models
 */
class Tblprojectmember extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'staff_id' => 'int'
	];

	protected $fillable = [
		'project_id',
		'staff_id'
	];
}
