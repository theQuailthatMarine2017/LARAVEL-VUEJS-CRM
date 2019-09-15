<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblticketattachment
 * 
 * @property int $id
 * @property int $ticketid
 * @property int $replyid
 * @property string $file_name
 * @property string $filetype
 * @property \Carbon\Carbon $dateadded
 *
 * @package App\Models
 */
class Tblticketattachment extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'ticketid' => 'int',
		'replyid' => 'int'
	];

	protected $dates = [
		'dateadded'
	];

	protected $fillable = [
		'ticketid',
		'replyid',
		'file_name',
		'filetype',
		'dateadded'
	];
}
