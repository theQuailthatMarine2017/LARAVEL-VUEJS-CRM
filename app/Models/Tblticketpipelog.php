<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblticketpipelog
 * 
 * @property int $id
 * @property \Carbon\Carbon $date
 * @property string $email_to
 * @property string $name
 * @property string $subject
 * @property string $message
 * @property string $email
 * @property string $status
 *
 * @package App\Models
 */
class Tblticketpipelog extends Eloquent
{
	protected $table = 'tblticketpipelog';
	public $timestamps = false;

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'date',
		'email_to',
		'name',
		'subject',
		'message',
		'email',
		'status'
	];
}
