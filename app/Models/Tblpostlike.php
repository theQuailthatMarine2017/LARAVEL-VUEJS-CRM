<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblpostlike
 * 
 * @property int $id
 * @property int $postid
 * @property int $userid
 * @property \Carbon\Carbon $dateliked
 *
 * @package App\Models
 */
class Tblpostlike extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'postid' => 'int',
		'userid' => 'int'
	];

	protected $dates = [
		'dateliked'
	];

	protected $fillable = [
		'postid',
		'userid',
		'dateliked'
	];
}
