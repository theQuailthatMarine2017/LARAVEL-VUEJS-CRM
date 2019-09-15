<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblcustomersgroup
 * 
 * @property int $id
 * @property string $name
 *
 * @package App\Models
 */
class Tblcustomersgroup extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
