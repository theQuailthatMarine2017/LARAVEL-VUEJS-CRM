<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tbldepartment
 * 
 * @property int $departmentid
 * @property string $name
 * @property string $imap_username
 * @property string $email
 * @property bool $email_from_header
 * @property string $host
 * @property string $password
 * @property string $encryption
 * @property int $delete_after_import
 * @property string $calendar_id
 * @property bool $hidefromclient
 *
 * @package App\Models
 */
class Tbldepartment extends Eloquent
{
	protected $primaryKey = 'departmentid';
	public $timestamps = false;

	protected $casts = [
		'email_from_header' => 'bool',
		'delete_after_import' => 'int',
		'hidefromclient' => 'bool'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'imap_username',
		'email',
		'email_from_header',
		'host',
		'password',
		'encryption',
		'delete_after_import',
		'calendar_id',
		'hidefromclient'
	];
}
