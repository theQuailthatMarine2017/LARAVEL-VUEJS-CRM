<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblstaffdepartment
 * 
 * @property int $staffdepartmentid
 * @property int $staffid
 * @property int $departmentid
 *
 * @package App\Models
 */
class Tblstaffdepartment extends Eloquent
{
	protected $primaryKey = 'staffdepartmentid';
	public $timestamps = false;

	protected $casts = [
		'staffid' => 'int',
		'departmentid' => 'int'
	];

	protected $fillable = [
		'staffid',
		'departmentid'
	];
}
