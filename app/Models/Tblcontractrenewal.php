<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblcontractrenewal
 * 
 * @property int $id
 * @property int $contractid
 * @property \Carbon\Carbon $old_start_date
 * @property \Carbon\Carbon $new_start_date
 * @property \Carbon\Carbon $old_end_date
 * @property \Carbon\Carbon $new_end_date
 * @property float $old_value
 * @property float $new_value
 * @property \Carbon\Carbon $date_renewed
 * @property string $renewed_by
 * @property int $renewed_by_staff_id
 * @property int $is_on_old_expiry_notified
 *
 * @package App\Models
 */
class Tblcontractrenewal extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'contractid' => 'int',
		'old_value' => 'float',
		'new_value' => 'float',
		'renewed_by_staff_id' => 'int',
		'is_on_old_expiry_notified' => 'int'
	];

	protected $dates = [
		'old_start_date',
		'new_start_date',
		'old_end_date',
		'new_end_date',
		'date_renewed'
	];

	protected $fillable = [
		'contractid',
		'old_start_date',
		'new_start_date',
		'old_end_date',
		'new_end_date',
		'old_value',
		'new_value',
		'date_renewed',
		'renewed_by',
		'renewed_by_staff_id',
		'is_on_old_expiry_notified'
	];
}
