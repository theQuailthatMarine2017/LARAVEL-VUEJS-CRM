<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblexpensescategory
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 *
 * @package App\Models
 */
class Tblexpensescategory extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name',
		'description'
	];
}
