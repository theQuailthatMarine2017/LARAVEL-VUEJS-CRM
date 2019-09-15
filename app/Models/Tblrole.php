<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblrole
 * 
 * @property int $roleid
 * @property string $name
 *
 * @package App\Models
 */
class Tblrole extends Eloquent
{
	protected $primaryKey = 'roleid';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
