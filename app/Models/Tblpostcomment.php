<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblpostcomment
 * 
 * @property int $id
 * @property string $content
 * @property int $userid
 * @property int $postid
 * @property \Carbon\Carbon $dateadded
 *
 * @package App\Models
 */
class Tblpostcomment extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'userid' => 'int',
		'postid' => 'int'
	];

	protected $dates = [
		'dateadded'
	];

	protected $fillable = [
		'content',
		'userid',
		'postid',
		'dateadded'
	];
}
