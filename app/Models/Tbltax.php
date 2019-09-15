<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tbltax
 * 
 * @property int $id
 * @property string $name
 * @property float $taxrate
 *
 * @package App\Models
 */
class Tbltax extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'taxrate' => 'float'
	];

	protected $fillable = [
		'name',
		'taxrate'
	];
}
