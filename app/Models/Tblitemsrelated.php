<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblitemsrelated
 * 
 * @property int $id
 * @property int $rel_id
 * @property string $rel_type
 * @property int $item_id
 *
 * @package App\Models
 */
class Tblitemsrelated extends Eloquent
{
	protected $table = 'tblitemsrelated';
	public $timestamps = false;

	protected $casts = [
		'rel_id' => 'int',
		'item_id' => 'int'
	];

	protected $fillable = [
		'rel_id',
		'rel_type',
		'item_id'
	];
}
