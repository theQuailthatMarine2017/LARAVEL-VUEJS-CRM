<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblsession
 * 
 * @property string $id
 * @property string $ip_address
 * @property int $timestamp
 * @property boolean $data
 *
 * @package App\Models
 */
class Tblsession extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'timestamp' => 'int',
		'data' => 'boolean'
	];

	protected $fillable = [
		'ip_address',
		'timestamp',
		'data'
	];
}
