<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblrolepermission
 * 
 * @property int $rolepermissionid
 * @property int $roleid
 * @property bool $can_view
 * @property bool $can_view_own
 * @property bool $can_edit
 * @property bool $can_create
 * @property bool $can_delete
 * @property int $permissionid
 *
 * @package App\Models
 */
class Tblrolepermission extends Eloquent
{
	protected $primaryKey = 'rolepermissionid';
	public $timestamps = false;

	protected $casts = [
		'roleid' => 'int',
		'can_view' => 'bool',
		'can_view_own' => 'bool',
		'can_edit' => 'bool',
		'can_create' => 'bool',
		'can_delete' => 'bool',
		'permissionid' => 'int'
	];

	protected $fillable = [
		'roleid',
		'can_view',
		'can_view_own',
		'can_edit',
		'can_create',
		'can_delete',
		'permissionid'
	];
}
