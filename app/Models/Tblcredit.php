<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblcredit
 * 
 * @property int $id
 * @property int $invoice_id
 * @property int $credit_id
 * @property int $staff_id
 * @property \Carbon\Carbon $date
 * @property \Carbon\Carbon $date_applied
 * @property float $amount
 *
 * @package App\Models
 */
class Tblcredit extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'invoice_id' => 'int',
		'credit_id' => 'int',
		'staff_id' => 'int',
		'amount' => 'float'
	];

	protected $dates = [
		'date',
		'date_applied'
	];

	protected $fillable = [
		'invoice_id',
		'credit_id',
		'staff_id',
		'date',
		'date_applied',
		'amount'
	];
}
