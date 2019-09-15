<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblestimate
 * 
 * @property int $id
 * @property bool $sent
 * @property \Carbon\Carbon $datesend
 * @property int $clientid
 * @property string $deleted_customer_name
 * @property int $project_id
 * @property int $number
 * @property string $prefix
 * @property int $number_format
 * @property string $hash
 * @property \Carbon\Carbon $datecreated
 * @property \Carbon\Carbon $date
 * @property \Carbon\Carbon $expirydate
 * @property int $currency
 * @property float $subtotal
 * @property float $total_tax
 * @property float $total
 * @property float $adjustment
 * @property int $addedfrom
 * @property int $status
 * @property string $clientnote
 * @property string $adminnote
 * @property float $discount_percent
 * @property float $discount_total
 * @property string $discount_type
 * @property int $invoiceid
 * @property \Carbon\Carbon $invoiced_date
 * @property string $terms
 * @property string $reference_no
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
 * @property bool $show_shipping_on_estimate
 * @property int $show_quantity_as
 * @property int $pipeline_order
 * @property int $is_expiry_notified
 * @property string $acceptance_firstname
 * @property string $acceptance_lastname
 * @property string $acceptance_email
 * @property \Carbon\Carbon $acceptance_date
 * @property string $acceptance_ip
 * @property string $signature
 *
 * @package App\Models
 */
class Tblestimate extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'sent' => 'bool',
		'clientid' => 'int',
		'project_id' => 'int',
		'number' => 'int',
		'number_format' => 'int',
		'currency' => 'int',
		'subtotal' => 'float',
		'total_tax' => 'float',
		'total' => 'float',
		'adjustment' => 'float',
		'addedfrom' => 'int',
		'status' => 'int',
		'discount_percent' => 'float',
		'discount_total' => 'float',
		'invoiceid' => 'int',
		'sale_agent' => 'int',
		'billing_country' => 'int',
		'shipping_country' => 'int',
		'include_shipping' => 'bool',
		'show_shipping_on_estimate' => 'bool',
		'show_quantity_as' => 'int',
		'pipeline_order' => 'int',
		'is_expiry_notified' => 'int'
	];

	protected $dates = [
		'datesend',
		'datecreated',
		'date',
		'expirydate',
		'invoiced_date',
		'acceptance_date'
	];

	protected $fillable = [
		'sent',
		'datesend',
		'clientid',
		'deleted_customer_name',
		'project_id',
		'number',
		'prefix',
		'number_format',
		'hash',
		'datecreated',
		'date',
		'expirydate',
		'currency',
		'subtotal',
		'total_tax',
		'total',
		'adjustment',
		'addedfrom',
		'status',
		'clientnote',
		'adminnote',
		'discount_percent',
		'discount_total',
		'discount_type',
		'invoiceid',
		'invoiced_date',
		'terms',
		'reference_no',
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
		'show_shipping_on_estimate',
		'show_quantity_as',
		'pipeline_order',
		'is_expiry_notified',
		'acceptance_firstname',
		'acceptance_lastname',
		'acceptance_email',
		'acceptance_date',
		'acceptance_ip',
		'signature'
	];
}
