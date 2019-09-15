<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tbltodoitem
 * 
 * @property int $todoid
 * @property string $description
 * @property int $staffid
 * @property \Carbon\Carbon $dateadded
 * @property bool $finished
 * @property \Carbon\Carbon $datefinished
 * @property int $item_order
 *
 * @package App\Models
 */
class Tbltodoitem extends Eloquent
{
	protected $primaryKey = 'todoid';
	public $timestamps = false;

	protected $casts = [
		'staffid' => 'int',
		'finished' => 'bool',
		'item_order' => 'int'
	];

	protected $dates = [
		'dateadded',
		'datefinished'
	];

	protected $fillable = [
		'description',
		'staffid',
		'dateadded',
		'finished',
		'datefinished',
		'item_order'
	];
}
