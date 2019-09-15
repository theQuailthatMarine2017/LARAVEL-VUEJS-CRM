<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblmaillistscustomfieldvalue
 * 
 * @property int $customfieldvalueid
 * @property int $listid
 * @property int $customfieldid
 * @property int $emailid
 * @property string $value
 *
 * @package App\Models
 */
class Tblmaillistscustomfieldvalue extends Eloquent
{
	protected $primaryKey = 'customfieldvalueid';
	public $timestamps = false;

	protected $casts = [
		'listid' => 'int',
		'customfieldid' => 'int',
		'emailid' => 'int'
	];

	protected $fillable = [
		'listid',
		'customfieldid',
		'emailid',
		'value'
	];
}
