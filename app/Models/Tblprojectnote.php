<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblprojectnote
 * 
 * @property int $id
 * @property int $project_id
 * @property string $content
 * @property int $staff_id
 *
 * @package App\Models
 */
class Tblprojectnote extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'staff_id' => 'int'
	];

	protected $fillable = [
		'project_id',
		'content',
		'staff_id'
	];
}
