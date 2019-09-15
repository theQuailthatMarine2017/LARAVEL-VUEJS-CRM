<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblclient
 * 
 * @property int $userid
 * @property string $company
 * @property string $vat
 * @property string $phonenumber
 * @property int $country
 * @property string $city
 * @property string $zip
 * @property string $state
 * @property string $address
 * @property string $website
 * @property \Carbon\Carbon $datecreated
 * @property int $active
 * @property int $leadid
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
 * @property string $longitude
 * @property string $latitude
 * @property string $default_language
 * @property int $default_currency
 * @property int $show_primary_contact
 * @property string $stripe_id
 * @property int $registration_confirmed
 * @property int $addedfrom
 *
 * @package App\Models
 */
class Tblclient extends Eloquent
{
	protected $primaryKey = 'userid';
	public $timestamps = false;

	protected $casts = [
		'country' => 'int',
		'active' => 'int',
		'leadid' => 'int',
		'billing_country' => 'int',
		'shipping_country' => 'int',
		'default_currency' => 'int',
		'show_primary_contact' => 'int',
		'registration_confirmed' => 'int',
		'addedfrom' => 'int'
	];

	protected $dates = [
		'datecreated'
	];

	protected $fillable = [
		'company',
		'vat',
		'phonenumber',
		'country',
		'city',
		'zip',
		'state',
		'address',
		'website',
		'datecreated',
		'active',
		'leadid',
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
		'longitude',
		'latitude',
		'default_language',
		'default_currency',
		'show_primary_contact',
		'stripe_id',
		'registration_confirmed',
		'addedfrom'
	];
}
