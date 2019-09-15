<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblleadsstatus
 * 
 * @property int $id
 * @property string $name
 * @property int $statusorder
 * @property string $color
 * @property int $isdefault
 *
 * @package App\Models
 */
class Tblleadsstatus extends Eloquent
{
	protected $table = 'tblleadsstatus';
	public $timestamps = false;

	protected $casts = [
		'statusorder' => 'int',
		'isdefault' => 'int'
	];

	protected $fillable = [
		'name',
		'statusorder',
		'color',
		'isdefault'
	];
}
