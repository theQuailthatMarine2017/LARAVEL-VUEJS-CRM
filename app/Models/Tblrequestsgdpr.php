<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblrequestsgdpr
 * 
 * @property int $id
 * @property int $clientid
 * @property int $contact_id
 * @property int $lead_id
 * @property string $request_type
 * @property string $status
 * @property \Carbon\Carbon $request_date
 * @property string $request_from
 * @property string $description
 *
 * @package App\Models
 */
class Tblrequestsgdpr extends Eloquent
{
	protected $table = 'tblrequestsgdpr';
	public $timestamps = false;

	protected $casts = [
		'clientid' => 'int',
		'contact_id' => 'int',
		'lead_id' => 'int'
	];

	protected $dates = [
		'request_date'
	];

	protected $fillable = [
		'clientid',
		'contact_id',
		'lead_id',
		'request_type',
		'status',
		'request_date',
		'request_from',
		'description'
	];
}
