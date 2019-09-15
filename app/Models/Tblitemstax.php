<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblitemstax
 * 
 * @property int $id
 * @property int $itemid
 * @property int $rel_id
 * @property string $rel_type
 * @property float $taxrate
 * @property string $taxname
 *
 * @package App\Models
 */
class Tblitemstax extends Eloquent
{
	protected $table = 'tblitemstax';
	public $timestamps = false;

	protected $casts = [
		'itemid' => 'int',
		'rel_id' => 'int',
		'taxrate' => 'float'
	];

	protected $fillable = [
		'itemid',
		'rel_id',
		'rel_type',
		'taxrate',
		'taxname'
	];
}
