<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblcurrency
 * 
 * @property int $id
 * @property string $symbol
 * @property string $name
 * @property bool $isdefault
 *
 * @package App\Models
 */
class Tblcurrency extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'isdefault' => 'bool'
	];

	protected $fillable = [
		'symbol',
		'name',
		'isdefault'
	];
}
