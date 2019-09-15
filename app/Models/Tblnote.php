<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblnote
 * 
 * @property int $id
 * @property int $rel_id
 * @property string $rel_type
 * @property string $description
 * @property \Carbon\Carbon $date_contacted
 * @property int $addedfrom
 * @property \Carbon\Carbon $dateadded
 *
 * @package App\Models
 */
class Tblnote extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'rel_id' => 'int',
		'addedfrom' => 'int'
	];

	protected $dates = [
		'date_contacted',
		'dateadded'
	];

	protected $fillable = [
		'rel_id',
		'rel_type',
		'description',
		'date_contacted',
		'addedfrom',
		'dateadded'
	];
}
