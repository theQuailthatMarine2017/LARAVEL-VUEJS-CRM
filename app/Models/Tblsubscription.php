<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblsubscription
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property bool $description_in_item
 * @property int $clientid
 * @property \Carbon\Carbon $date
 * @property int $currency
 * @property int $tax_id
 * @property string $stripe_plan_id
 * @property string $stripe_subscription_id
 * @property int $next_billing_cycle
 * @property int $ends_at
 * @property string $status
 * @property int $quantity
 * @property int $project_id
 * @property string $hash
 * @property \Carbon\Carbon $created
 * @property int $created_from
 * @property \Carbon\Carbon $date_subscribed
 *
 * @package App\Models
 */
class Tblsubscription extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'description_in_item' => 'bool',
		'clientid' => 'int',
		'currency' => 'int',
		'tax_id' => 'int',
		'next_billing_cycle' => 'int',
		'ends_at' => 'int',
		'quantity' => 'int',
		'project_id' => 'int',
		'created_from' => 'int'
	];

	protected $dates = [
		'date',
		'created',
		'date_subscribed'
	];

	protected $fillable = [
		'name',
		'description',
		'description_in_item',
		'clientid',
		'date',
		'currency',
		'tax_id',
		'stripe_plan_id',
		'stripe_subscription_id',
		'next_billing_cycle',
		'ends_at',
		'status',
		'quantity',
		'project_id',
		'hash',
		'created',
		'created_from',
		'date_subscribed'
	];
}
