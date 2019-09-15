<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblservice
 * 
 * @property int $serviceid
 * @property string $name
 *
 * @package App\Models
 */
class Tblservice extends Eloquent
{
	protected $primaryKey = 'serviceid';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
