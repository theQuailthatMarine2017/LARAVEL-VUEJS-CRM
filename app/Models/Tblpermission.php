<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblpermission
 * 
 * @property int $permissionid
 * @property string $name
 * @property string $shortname
 *
 * @package App\Models
 */
class Tblpermission extends Eloquent
{
	protected $primaryKey = 'permissionid';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'shortname'
	];
}
