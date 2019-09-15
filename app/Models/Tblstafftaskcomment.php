<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblstafftaskcomment
 * 
 * @property int $id
 * @property string $content
 * @property int $taskid
 * @property int $staffid
 * @property int $contact_id
 * @property int $file_id
 * @property \Carbon\Carbon $dateadded
 *
 * @package App\Models
 */
class Tblstafftaskcomment extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'taskid' => 'int',
		'staffid' => 'int',
		'contact_id' => 'int',
		'file_id' => 'int'
	];

	protected $dates = [
		'dateadded'
	];

	protected $fillable = [
		'content',
		'taskid',
		'staffid',
		'contact_id',
		'file_id',
		'dateadded'
	];
}
