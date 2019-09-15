<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblconsentpurpose
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $date_created
 * @property \Carbon\Carbon $last_updated
 *
 * @package App\Models
 */
class Tblconsentpurpose extends Eloquent
{
	public $timestamps = false;

	protected $dates = [
		'date_created',
		'last_updated'
	];

	protected $fillable = [
		'name',
		'description',
		'date_created',
		'last_updated'
	];
}
