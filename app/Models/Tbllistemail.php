<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tbllistemail
 * 
 * @property int $emailid
 * @property int $listid
 * @property string $email
 * @property \Carbon\Carbon $dateadded
 *
 * @package App\Models
 */
class Tbllistemail extends Eloquent
{
	protected $primaryKey = 'emailid';
	public $timestamps = false;

	protected $casts = [
		'listid' => 'int'
	];

	protected $dates = [
		'dateadded'
	];

	protected $fillable = [
		'listid',
		'email',
		'dateadded'
	];
}
