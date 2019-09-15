<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblexpense
 * 
 * @property int $id
 * @property int $category
 * @property int $currency
 * @property float $amount
 * @property int $tax
 * @property int $tax2
 * @property string $reference_no
 * @property string $note
 * @property string $expense_name
 * @property int $clientid
 * @property int $project_id
 * @property int $billable
 * @property int $invoiceid
 * @property string $paymentmode
 * @property \Carbon\Carbon $date
 * @property string $recurring_type
 * @property int $repeat_every
 * @property int $recurring
 * @property int $cycles
 * @property int $total_cycles
 * @property int $custom_recurring
 * @property \Carbon\Carbon $last_recurring_date
 * @property bool $create_invoice_billable
 * @property bool $send_invoice_to_customer
 * @property int $recurring_from
 * @property \Carbon\Carbon $dateadded
 * @property int $addedfrom
 *
 * @package App\Models
 */
class Tblexpense extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'category' => 'int',
		'currency' => 'int',
		'amount' => 'float',
		'tax' => 'int',
		'tax2' => 'int',
		'clientid' => 'int',
		'project_id' => 'int',
		'billable' => 'int',
		'invoiceid' => 'int',
		'repeat_every' => 'int',
		'recurring' => 'int',
		'cycles' => 'int',
		'total_cycles' => 'int',
		'custom_recurring' => 'int',
		'create_invoice_billable' => 'bool',
		'send_invoice_to_customer' => 'bool',
		'recurring_from' => 'int',
		'addedfrom' => 'int'
	];

	protected $dates = [
		'date',
		'last_recurring_date',
		'dateadded'
	];

	protected $fillable = [
		'category',
		'currency',
		'amount',
		'tax',
		'tax2',
		'reference_no',
		'note',
		'expense_name',
		'clientid',
		'project_id',
		'billable',
		'invoiceid',
		'paymentmode',
		'date',
		'recurring_type',
		'repeat_every',
		'recurring',
		'cycles',
		'total_cycles',
		'custom_recurring',
		'last_recurring_date',
		'create_invoice_billable',
		'send_invoice_to_customer',
		'recurring_from',
		'dateadded',
		'addedfrom'
	];
}
