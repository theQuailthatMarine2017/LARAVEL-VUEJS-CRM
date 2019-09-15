<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblprojectsetting
 * 
 * @property int $id
 * @property int $project_id
 * @property string $name
 * @property string $value
 *
 * @package App\Models
 */
class Tblprojectsetting extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int'
	];

	protected $fillable = [
		'project_id',
		'name',
		'value'
	];
}
