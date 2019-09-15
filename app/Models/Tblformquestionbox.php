<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblformquestionbox
 * 
 * @property int $boxid
 * @property string $boxtype
 * @property int $questionid
 *
 * @package App\Models
 */
class Tblformquestionbox extends Eloquent
{
	protected $primaryKey = 'boxid';
	public $timestamps = false;

	protected $casts = [
		'questionid' => 'int'
	];

	protected $fillable = [
		'boxtype',
		'questionid'
	];
}
