<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblcustomergroupsIn
 * 
 * @property int $id
 * @property int $groupid
 * @property int $customer_id
 *
 * @package App\Models
 */
class TblcustomergroupsIn extends Eloquent
{
	protected $table = 'tblcustomergroups_in';
	public $timestamps = false;

	protected $casts = [
		'groupid' => 'int',
		'customer_id' => 'int'
	];

	protected $fillable = [
		'groupid',
		'customer_id'
	];
}
