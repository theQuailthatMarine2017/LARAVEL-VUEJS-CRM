<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblemailqueue
 * 
 * @property int $id
 * @property string $engine
 * @property string $email
 * @property string $cc
 * @property string $bcc
 * @property string $message
 * @property string $alt_message
 * @property string $status
 * @property \Carbon\Carbon $date
 * @property string $headers
 * @property string $attachments
 *
 * @package App\Models
 */
class Tblemailqueue extends Eloquent
{
	protected $table = 'tblemailqueue';
	public $timestamps = false;

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'engine',
		'email',
		'cc',
		'bcc',
		'message',
		'alt_message',
		'status',
		'date',
		'headers',
		'attachments'
	];
}
