<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblvault
 * 
 * @property int $id
 * @property int $customer_id
 * @property string $server_address
 * @property int $port
 * @property string $username
 * @property string $password
 * @property string $description
 * @property int $creator
 * @property string $creator_name
 * @property bool $visibility
 * @property bool $share_in_projects
 * @property \Carbon\Carbon $last_updated
 * @property string $last_updated_from
 * @property \Carbon\Carbon $date_created
 *
 * @package App\Models
 */
class Tblvault extends Eloquent
{
	protected $table = 'tblvault';
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int',
		'port' => 'int',
		'creator' => 'int',
		'visibility' => 'bool',
		'share_in_projects' => 'bool'
	];

	protected $dates = [
		'last_updated',
		'date_created'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'customer_id',
		'server_address',
		'port',
		'username',
		'password',
		'description',
		'creator',
		'creator_name',
		'visibility',
		'share_in_projects',
		'last_updated',
		'last_updated_from',
		'date_created'
	];
}
