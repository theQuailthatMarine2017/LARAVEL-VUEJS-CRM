<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblticket
 * 
 * @property int $ticketid
 * @property int $adminreplying
 * @property int $userid
 * @property int $contactid
 * @property string $email
 * @property string $name
 * @property int $department
 * @property int $priority
 * @property int $status
 * @property int $service
 * @property string $ticketkey
 * @property string $subject
 * @property string $message
 * @property int $admin
 * @property \Carbon\Carbon $date
 * @property int $project_id
 * @property \Carbon\Carbon $lastreply
 * @property int $clientread
 * @property int $adminread
 * @property int $assigned
 *
 * @package App\Models
 */
class Tblticket extends Eloquent
{
	protected $primaryKey = 'ticketid';
	public $timestamps = false;

	protected $casts = [
		'adminreplying' => 'int',
		'userid' => 'int',
		'contactid' => 'int',
		'department' => 'int',
		'priority' => 'int',
		'status' => 'int',
		'service' => 'int',
		'admin' => 'int',
		'project_id' => 'int',
		'clientread' => 'int',
		'adminread' => 'int',
		'assigned' => 'int'
	];

	protected $dates = [
		'date',
		'lastreply'
	];

	protected $fillable = [
		'adminreplying',
		'userid',
		'contactid',
		'email',
		'name',
		'department',
		'priority',
		'status',
		'service',
		'ticketkey',
		'subject',
		'message',
		'admin',
		'date',
		'project_id',
		'lastreply',
		'clientread',
		'adminread',
		'assigned'
	];
}
