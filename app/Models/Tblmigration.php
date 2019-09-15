<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblmigration
 * 
 * @property int $version
 *
 * @package App\Models
 */
class Tblmigration extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'version' => 'int'
	];

	protected $fillable = [
		'version'
	];
}
