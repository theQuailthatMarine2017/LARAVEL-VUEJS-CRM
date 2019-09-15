<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblformresult
 * 
 * @property int $resultid
 * @property int $boxid
 * @property int $boxdescriptionid
 * @property int $rel_id
 * @property string $rel_type
 * @property int $questionid
 * @property string $answer
 * @property int $resultsetid
 *
 * @package App\Models
 */
class Tblformresult extends Eloquent
{
	protected $primaryKey = 'resultid';
	public $timestamps = false;

	protected $casts = [
		'boxid' => 'int',
		'boxdescriptionid' => 'int',
		'rel_id' => 'int',
		'questionid' => 'int',
		'resultsetid' => 'int'
	];

	protected $fillable = [
		'boxid',
		'boxdescriptionid',
		'rel_id',
		'rel_type',
		'questionid',
		'answer',
		'resultsetid'
	];
}
