<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblleadactivitylog
 * 
 * @property int $id
 * @property int $leadid
 * @property string $description
 * @property string $additional_data
 * @property \Carbon\Carbon $date
 * @property int $staffid
 * @property string $full_name
 * @property bool $custom_activity
 *
 * @package App\Models
 */
class Tblleadactivitylog extends Eloquent
{
	protected $table = 'tblleadactivitylog';
	public $timestamps = false;

	protected $casts = [
		'leadid' => 'int',
		'staffid' => 'int',
		'custom_activity' => 'bool'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'leadid',
		'description',
		'additional_data',
		'date',
		'staffid',
		'full_name',
		'custom_activity'
	];
}
