<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblcustomeradmin
 * 
 * @property int $staff_id
 * @property int $customer_id
 * @property string $date_assigned
 *
 * @package App\Models
 */
class Tblcustomeradmin extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'staff_id' => 'int',
		'customer_id' => 'int'
	];

	protected $fillable = [
		'staff_id',
		'customer_id',
		'date_assigned'
	];
}
