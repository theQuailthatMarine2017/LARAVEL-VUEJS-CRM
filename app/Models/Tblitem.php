<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblitem
 * 
 * @property int $id
 * @property string $description
 * @property string $long_description
 * @property float $rate
 * @property int $tax
 * @property int $tax2
 * @property string $unit
 * @property int $group_id
 *
 * @package App\Models
 */
class Tblitem extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'rate' => 'float',
		'tax' => 'int',
		'tax2' => 'int',
		'group_id' => 'int'
	];

	protected $fillable = [
		'description',
		'long_description',
		'rate',
		'tax',
		'tax2',
		'unit',
		'group_id'
	];
}
