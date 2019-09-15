<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblcontractcomment
 * 
 * @property int $id
 * @property string $content
 * @property int $contract_id
 * @property int $staffid
 * @property \Carbon\Carbon $dateadded
 *
 * @package App\Models
 */
class Tblcontractcomment extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'contract_id' => 'int',
		'staffid' => 'int'
	];

	protected $dates = [
		'dateadded'
	];

	protected $fillable = [
		'content',
		'contract_id',
		'staffid',
		'dateadded'
	];
}
