<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tbllead
 * 
 * @property int $id
 * @property string $hash
 * @property string $name
 * @property string $title
 * @property string $company
 * @property string $description
 * @property int $country
 * @property string $zip
 * @property string $city
 * @property string $state
 * @property string $address
 * @property int $assigned
 * @property \Carbon\Carbon $dateadded
 * @property int $from_form_id
 * @property int $status
 * @property int $source
 * @property \Carbon\Carbon $lastcontact
 * @property \Carbon\Carbon $dateassigned
 * @property \Carbon\Carbon $last_status_change
 * @property int $addedfrom
 * @property string $email
 * @property string $website
 * @property int $leadorder
 * @property string $phonenumber
 * @property \Carbon\Carbon $date_converted
 * @property bool $lost
 * @property int $junk
 * @property int $last_lead_status
 * @property bool $is_imported_from_email_integration
 * @property string $email_integration_uid
 * @property bool $is_public
 * @property string $default_language
 * @property int $client_id
 *
 * @package App\Models
 */
class Tbllead extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'country' => 'int',
		'assigned' => 'int',
		'from_form_id' => 'int',
		'status' => 'int',
		'source' => 'int',
		'addedfrom' => 'int',
		'leadorder' => 'int',
		'lost' => 'bool',
		'junk' => 'int',
		'last_lead_status' => 'int',
		'is_imported_from_email_integration' => 'bool',
		'is_public' => 'bool',
		'client_id' => 'int'
	];

	protected $dates = [
		'dateadded',
		'lastcontact',
		'dateassigned',
		'last_status_change',
		'date_converted'
	];

	protected $fillable = [
		'hash',
		'name',
		'title',
		'company',
		'description',
		'country',
		'zip',
		'city',
		'state',
		'address',
		'assigned',
		'dateadded',
		'from_form_id',
		'status',
		'source',
		'lastcontact',
		'dateassigned',
		'last_status_change',
		'addedfrom',
		'email',
		'website',
		'leadorder',
		'phonenumber',
		'date_converted',
		'lost',
		'junk',
		'last_lead_status',
		'is_imported_from_email_integration',
		'email_integration_uid',
		'is_public',
		'default_language',
		'client_id'
	];
}
