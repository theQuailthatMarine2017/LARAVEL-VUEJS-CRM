<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblinvoicepaymentrecord
 * 
 * @property int $id
 * @property int $invoiceid
 * @property float $amount
 * @property string $paymentmode
 * @property string $paymentmethod
 * @property \Carbon\Carbon $date
 * @property \Carbon\Carbon $daterecorded
 * @property string $note
 * @property string $transactionid
 *
 * @package App\Models
 */
class Tblinvoicepaymentrecord extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'invoiceid' => 'int',
		'amount' => 'float'
	];

	protected $dates = [
		'date',
		'daterecorded'
	];

	protected $fillable = [
		'invoiceid',
		'amount',
		'paymentmode',
		'paymentmethod',
		'date',
		'daterecorded',
		'note',
		'transactionid'
	];
}
