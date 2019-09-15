<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblstaffpermission
 * 
 * @property int $staffpermid
 * @property int $permissionid
 * @property bool $can_view
 * @property bool $can_view_own
 * @property bool $can_edit
 * @property bool $can_create
 * @property bool $can_delete
 * @property int $staffid
 *
 * @package App\Models
 */
class Tblstaffpermission extends Eloquent
{
	protected $primaryKey = 'staffpermid';
	public $timestamps = false;

	protected $casts = [
		'permissionid' => 'int',
		'can_view' => 'bool',
		'can_view_own' => 'bool',
		'can_edit' => 'bool',
		'can_create' => 'bool',
		'can_delete' => 'bool',
		'staffid' => 'int'
	];

	protected $fillable = [
		'permissionid',
		'can_view',
		'can_view_own',
		'can_edit',
		'can_create',
		'can_delete',
		'staffid'
	];
}
