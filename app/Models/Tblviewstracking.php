<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblviewstracking
 * 
 * @property int $id
 * @property int $rel_id
 * @property string $rel_type
 * @property \Carbon\Carbon $date
 * @property string $view_ip
 *
 * @package App\Models
 */
class Tblviewstracking extends Eloquent
{
	protected $table = 'tblviewstracking';
	public $timestamps = false;

	protected $casts = [
		'rel_id' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'rel_id',
		'rel_type',
		'date',
		'view_ip'
	];
}
