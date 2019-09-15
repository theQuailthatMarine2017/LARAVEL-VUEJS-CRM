<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblstafftasksfollower
 * 
 * @property int $id
 * @property int $staffid
 * @property int $taskid
 *
 * @package App\Models
 */
class Tblstafftasksfollower extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'staffid' => 'int',
		'taskid' => 'int'
	];

	protected $fillable = [
		'staffid',
		'taskid'
	];
}
