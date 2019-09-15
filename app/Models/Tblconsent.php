<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblconsent
 * 
 * @property int $id
 * @property string $action
 * @property \Carbon\Carbon $date
 * @property string $ip
 * @property int $contact_id
 * @property int $lead_id
 * @property string $description
 * @property string $opt_in_purpose_description
 * @property int $purpose_id
 * @property string $staff_name
 *
 * @package App\Models
 */
class Tblconsent extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'contact_id' => 'int',
		'lead_id' => 'int',
		'purpose_id' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'action',
		'date',
		'ip',
		'contact_id',
		'lead_id',
		'description',
		'opt_in_purpose_description',
		'purpose_id',
		'staff_name'
	];
}
