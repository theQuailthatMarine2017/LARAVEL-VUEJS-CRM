<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblproposal
 * 
 * @property int $id
 * @property string $subject
 * @property string $content
 * @property int $addedfrom
 * @property \Carbon\Carbon $datecreated
 * @property float $total
 * @property float $subtotal
 * @property float $total_tax
 * @property float $adjustment
 * @property float $discount_percent
 * @property float $discount_total
 * @property string $discount_type
 * @property int $show_quantity_as
 * @property int $currency
 * @property \Carbon\Carbon $open_till
 * @property \Carbon\Carbon $date
 * @property int $rel_id
 * @property string $rel_type
 * @property int $assigned
 * @property string $hash
 * @property string $proposal_to
 * @property int $country
 * @property string $zip
 * @property string $state
 * @property string $city
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property bool $allow_comments
 * @property int $status
 * @property int $estimate_id
 * @property int $invoice_id
 * @property \Carbon\Carbon $date_converted
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
class Tblproposal extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'addedfrom' => 'int',
		'total' => 'float',
		'subtotal' => 'float',
		'total_tax' => 'float',
		'adjustment' => 'float',
		'discount_percent' => 'float',
		'discount_total' => 'float',
		'show_quantity_as' => 'int',
		'currency' => 'int',
		'rel_id' => 'int',
		'assigned' => 'int',
		'country' => 'int',
		'allow_comments' => 'bool',
		'status' => 'int',
		'estimate_id' => 'int',
		'invoice_id' => 'int',
		'pipeline_order' => 'int',
		'is_expiry_notified' => 'int'
	];

	protected $dates = [
		'datecreated',
		'open_till',
		'date',
		'date_converted',
		'acceptance_date'
	];

	protected $fillable = [
		'subject',
		'content',
		'addedfrom',
		'datecreated',
		'total',
		'subtotal',
		'total_tax',
		'adjustment',
		'discount_percent',
		'discount_total',
		'discount_type',
		'show_quantity_as',
		'currency',
		'open_till',
		'date',
		'rel_id',
		'rel_type',
		'assigned',
		'hash',
		'proposal_to',
		'country',
		'zip',
		'state',
		'city',
		'address',
		'email',
		'phone',
		'allow_comments',
		'status',
		'estimate_id',
		'invoice_id',
		'date_converted',
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
