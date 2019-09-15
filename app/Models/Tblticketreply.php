<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblticketreply
 * 
 * @property int $id
 * @property int $ticketid
 * @property int $userid
 * @property int $contactid
 * @property string $name
 * @property string $email
 * @property \Carbon\Carbon $date
 * @property string $message
 * @property int $attachment
 * @property int $admin
 *
 * @package App\Models
 */
class Tblticketreply extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'ticketid' => 'int',
		'userid' => 'int',
		'contactid' => 'int',
		'attachment' => 'int',
		'admin' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'ticketid',
		'userid',
		'contactid',
		'name',
		'email',
		'date',
		'message',
		'attachment',
		'admin'
	];
}
