<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tbltaskchecklist
 * 
 * @property int $id
 * @property int $taskid
 * @property string $description
 * @property int $finished
 * @property \Carbon\Carbon $dateadded
 * @property int $addedfrom
 * @property int $finished_from
 * @property int $list_order
 *
 * @package App\Models
 */
class Tbltaskchecklist extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'taskid' => 'int',
		'finished' => 'int',
		'addedfrom' => 'int',
		'finished_from' => 'int',
		'list_order' => 'int'
	];

	protected $dates = [
		'dateadded'
	];

	protected $fillable = [
		'taskid',
		'description',
		'finished',
		'dateadded',
		'addedfrom',
		'finished_from',
		'list_order'
	];
}
