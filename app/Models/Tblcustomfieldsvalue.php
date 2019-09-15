<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblcustomfieldsvalue
 * 
 * @property int $id
 * @property int $relid
 * @property int $fieldid
 * @property string $fieldto
 * @property string $value
 *
 * @package App\Models
 */
class Tblcustomfieldsvalue extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'relid' => 'int',
		'fieldid' => 'int'
	];

	protected $fillable = [
		'relid',
		'fieldid',
		'fieldto',
		'value'
	];
}
