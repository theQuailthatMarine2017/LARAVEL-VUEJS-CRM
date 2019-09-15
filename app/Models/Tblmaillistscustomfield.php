<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblmaillistscustomfield
 * 
 * @property int $customfieldid
 * @property int $listid
 * @property string $fieldname
 * @property string $fieldslug
 *
 * @package App\Models
 */
class Tblmaillistscustomfield extends Eloquent
{
	protected $primaryKey = 'customfieldid';
	public $timestamps = false;

	protected $casts = [
		'listid' => 'int'
	];

	protected $fillable = [
		'listid',
		'fieldname',
		'fieldslug'
	];
}
