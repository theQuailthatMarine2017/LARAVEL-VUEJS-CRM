<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblitemsIn
 * 
 * @property int $id
 * @property int $rel_id
 * @property string $rel_type
 * @property string $description
 * @property string $long_description
 * @property float $qty
 * @property float $rate
 * @property string $unit
 * @property int $item_order
 *
 * @package App\Models
 */
class TblitemsIn extends Eloquent
{
	protected $table = 'tblitems_in';
	public $timestamps = false;

	protected $casts = [
		'rel_id' => 'int',
		'qty' => 'float',
		'rate' => 'float',
		'item_order' => 'int'
	];

	protected $fillable = [
		'rel_id',
		'rel_type',
		'description',
		'long_description',
		'qty',
		'rate',
		'unit',
		'item_order'
	];
}
