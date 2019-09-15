<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblcreditnote
 * 
 * @property int $id
 * @property int $clientid
 * @property string $deleted_customer_name
 * @property int $number
 * @property string $prefix
 * @property int $number_format
 * @property \Carbon\Carbon $datecreated
 * @property \Carbon\Carbon $date
 * @property string $adminnote
 * @property string $terms
 * @property string $clientnote
 * @property int $currency
 * @property float $subtotal
 * @property float $total_tax
 * @property float $total
 * @property float $adjustment
 * @property int $addedfrom
 * @property int $status
 * @property int $project_id
 * @property float $discount_percent
 * @property float $discount_total
 * @property string $discount_type
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
 * @property bool $show_shipping_on_credit_note
 * @property int $show_quantity_as
 * @property string $reference_no
 *
 * @package App\Models
 */
class Tblcreditnote extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
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
		'project_id' => 'int',
		'discount_percent' => 'float',
		'discount_total' => 'float',
		'billing_country' => 'int',
		'shipping_country' => 'int',
		'include_shipping' => 'bool',
		'show_shipping_on_credit_note' => 'bool',
		'show_quantity_as' => 'int'
	];

	protected $dates = [
		'datecreated',
		'date'
	];

	protected $fillable = [
		'clientid',
		'deleted_customer_name',
		'number',
		'prefix',
		'number_format',
		'datecreated',
		'date',
		'adminnote',
		'terms',
		'clientnote',
		'currency',
		'subtotal',
		'total_tax',
		'total',
		'adjustment',
		'addedfrom',
		'status',
		'project_id',
		'discount_percent',
		'discount_total',
		'discount_type',
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
		'show_shipping_on_credit_note',
		'show_quantity_as',
		'reference_no'
	];
}
