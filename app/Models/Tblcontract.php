<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblcontract
 * 
 * @property int $id
 * @property string $content
 * @property string $description
 * @property string $subject
 * @property int $client
 * @property \Carbon\Carbon $datestart
 * @property \Carbon\Carbon $dateend
 * @property int $contract_type
 * @property int $addedfrom
 * @property \Carbon\Carbon $dateadded
 * @property int $isexpirynotified
 * @property float $contract_value
 * @property bool $trash
 * @property bool $not_visible_to_client
 * @property string $hash
 * @property bool $signed
 * @property string $signature
 * @property string $acceptance_firstname
 * @property string $acceptance_lastname
 * @property string $acceptance_email
 * @property \Carbon\Carbon $acceptance_date
 * @property string $acceptance_ip
 *
 * @package App\Models
 */
class Tblcontract extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'client' => 'int',
		'contract_type' => 'int',
		'addedfrom' => 'int',
		'isexpirynotified' => 'int',
		'contract_value' => 'float',
		'trash' => 'bool',
		'not_visible_to_client' => 'bool',
		'signed' => 'bool'
	];

	protected $dates = [
		'datestart',
		'dateend',
		'dateadded',
		'acceptance_date'
	];

	protected $fillable = [
		'content',
		'description',
		'subject',
		'client',
		'datestart',
		'dateend',
		'contract_type',
		'addedfrom',
		'dateadded',
		'isexpirynotified',
		'contract_value',
		'trash',
		'not_visible_to_client',
		'hash',
		'signed',
		'signature',
		'acceptance_firstname',
		'acceptance_lastname',
		'acceptance_email',
		'acceptance_date',
		'acceptance_ip'
	];
}
