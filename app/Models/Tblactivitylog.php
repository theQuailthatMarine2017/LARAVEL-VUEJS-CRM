<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblactivitylog
 * 
 * @property int $id
 * @property string $description
 * @property \Carbon\Carbon $date
 * @property string $staffid
 *
 * @package App\Models
 */
class Tblactivitylog extends Eloquent
{
	protected $table = 'tblactivitylog';
	public $timestamps = false;

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'description',
		'date',
		'staffid'
	];
}
