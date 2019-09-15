<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblticketsspamcontrol
 * 
 * @property int $id
 * @property string $type
 * @property string $value
 *
 * @package App\Models
 */
class Tblticketsspamcontrol extends Eloquent
{
	protected $table = 'tblticketsspamcontrol';
	public $timestamps = false;

	protected $fillable = [
		'type',
		'value'
	];
}
