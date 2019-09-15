<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblcontactpermission
 * 
 * @property int $id
 * @property int $permission_id
 * @property int $userid
 *
 * @package App\Models
 */
class Tblcontactpermission extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'permission_id' => 'int',
		'userid' => 'int'
	];

	protected $fillable = [
		'permission_id',
		'userid'
	];
}
