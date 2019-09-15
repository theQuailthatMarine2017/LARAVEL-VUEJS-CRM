<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblinvoice
 * 
 * @property int $id
 * @property bool $sent
 * @property \Carbon\Carbon $datesend
 * @property int $clientid
 * @property string $deleted_customer_name
 * @property int $number
 * @property string $prefix
 * @property int $number_format
 * @property \Carbon\Carbon $datecreated
 * @property \Carbon\Carbon $date
 * @property \Carbon\Carbon $duedate
 * @property int $currency
 * @property float $subtotal
 * @property float $total_tax
 * @property float $total
 * @property float $adjustment
 * @property int $addedfrom
 * @property string $hash
 * @property int $status
 * @property string $clientnote
 * @property string $adminnote
 * @property \Carbon\Carbon $last_overdue_reminder
 * @property int $cancel_overdue_reminders
 * @property string $allowed_payment_modes
 * @property string $token
 * @property float $discount_percent
 * @property float $discount_total
 * @property string $discount_type
 * @property int $recurring
 * @property string $recurring_type
 * @property bool $custom_recurring
 * @property int $cycles
 * @property int $total_cycles
 * @property int $is_recurring_from
 * @property \Carbon\Carbon $last_recurring_date
 * @property string $terms
 * @property int $sale_agent
 * @property string $billing_street
 * @property string $billing_city
 * @property string $billing_state
 * @property string $billing_zip
 * @property int $billing_country
 * @property string $shipping_street
 * @property string $shipping_city
 * @property string $shipping_state
 * @property string $shipping_zip
 * @property int $shipping_country
 * @property bool $include_shipping
 * @property bool $show_shipping_on_invoice
 * @property int $show_quantity_as
 * @property int $project_id
 * @property int $subscription_id
 *
 * @package App\Models
 */
class Tblinvoice extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'sent' => 'bool',
		'clientid' => 'int',
		'number' => 'int',
		'number_format' => 'int',
		'currency' => 'int',
		'subtotal' => 'float',
		'total_tax' => 'float',
		'total' => 'float',
		'adjustment' => 'float',
		'addedfrom' => 'int',
		'status' => 'int',
		'cancel_overdue_reminders' => 'int',
		'discount_percent' => 'float',
		'discount_total' => 'float',
		'recurring' => 'int',
		'custom_recurring' => 'bool',
		'cycles' => 'int',
		'total_cycles' => 'int',
		'is_recurring_from' => 'int',
		'sale_agent' => 'int',
		'billing_country' => 'int',
		'shipping_country' => 'int',
		'include_shipping' => 'bool',
		'show_shipping_on_invoice' => 'bool',
		'show_quantity_as' => 'int',
		'project_id' => 'int',
		'subscription_id' => 'int'
	];

	protected $dates = [
		'datesend',
		'datecreated',
		'date',
		'duedate',
		'last_overdue_reminder',
		'last_recurring_date'
	];

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'sent',
		'datesend',
		'clientid',
		'deleted_customer_name',
		'number',
		'prefix',
		'number_format',
		'datecreated',
		'date',
		'duedate',
		'currency',
		'subtotal',
		'total_tax',
		'total',
		'adjustment',
		'addedfrom',
		'hash',
		'status',
		'clientnote',
		'adminnote',
		'last_overdue_reminder',
		'cancel_overdue_reminders',
		'allowed_payment_modes',
		'token',
		'discount_percent',
		'discount_total',
		'discount_type',
		'recurring',
		'recurring_type',
		'custom_recurring',
		'cycles',
		'total_cycles',
		'is_recurring_from',
		'last_recurring_date',
		'terms',
		'sale_agent',
		'billing_street',
		'billing_city',
		'billing_state',
		'billing_zip',
		'billing_country',
		'shipping_street',
		'shipping_city',
		'shipping_state',
		'shipping_zip',
		'shipping_country',
		'include_shipping',
		'show_shipping_on_invoice',
		'show_quantity_as',
		'project_id',
		'subscription_id'
	];
}
