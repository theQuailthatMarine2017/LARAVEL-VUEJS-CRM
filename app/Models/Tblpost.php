<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblpost
 * 
 * @property int $postid
 * @property int $creator
 * @property \Carbon\Carbon $datecreated
 * @property string $visibility
 * @property string $content
 * @property int $pinned
 * @property \Carbon\Carbon $datepinned
 *
 * @package App\Models
 */
class Tblpost extends Eloquent
{
	protected $primaryKey = 'postid';
	public $timestamps = false;

	protected $casts = [
		'creator' => 'int',
		'pinned' => 'int'
	];

	protected $dates = [
		'datecreated',
		'datepinned'
	];

	protected $fillable = [
		'creator',
		'datecreated',
		'visibility',
		'content',
		'pinned',
		'datepinned'
	];
}
