<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TblcustomerfilesShare
 * 
 * @property int $file_id
 * @property int $contact_id
 *
 * @package App\Models
 */
class TblcustomerfilesShare extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'file_id' => 'int',
		'contact_id' => 'int'
	];

	protected $fillable = [
		'file_id',
		'contact_id'
	];
}
