<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblsalesactivity
 * 
 * @property int $id
 * @property string $rel_type
 * @property int $rel_id
 * @property string $description
 * @property string $additional_data
 * @property string $staffid
 * @property string $full_name
 * @property \Carbon\Carbon $date
 *
 * @package App\Models
 */
class Tblsalesactivity extends Eloquent
{
	protected $table = 'tblsalesactivity';
	public $timestamps = false;

	protected $casts = [
		'rel_id' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'rel_type',
		'rel_id',
		'description',
		'additional_data',
		'staffid',
		'full_name',
		'date'
	];
}
