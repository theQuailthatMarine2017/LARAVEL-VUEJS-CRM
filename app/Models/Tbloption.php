<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tbloption
 * 
 * @property int $id
 * @property string $name
 * @property string $value
 * @property bool $autoload
 *
 * @package App\Models
 */
class Tbloption extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'autoload' => 'bool'
	];

	protected $fillable = [
		'name',
		'value',
		'autoload'
	];
}
