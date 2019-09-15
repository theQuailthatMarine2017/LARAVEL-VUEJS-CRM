<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblcommentlike
 * 
 * @property int $id
 * @property int $postid
 * @property int $commentid
 * @property int $userid
 * @property \Carbon\Carbon $dateliked
 *
 * @package App\Models
 */
class Tblcommentlike extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'postid' => 'int',
		'commentid' => 'int',
		'userid' => 'int'
	];

	protected $dates = [
		'dateliked'
	];

	protected $fillable = [
		'postid',
		'commentid',
		'userid',
		'dateliked'
	];
}
