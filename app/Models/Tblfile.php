<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblfile
 * 
 * @property int $id
 * @property int $rel_id
 * @property string $rel_type
 * @property string $file_name
 * @property string $filetype
 * @property int $visible_to_customer
 * @property string $attachment_key
 * @property string $external
 * @property string $external_link
 * @property string $thumbnail_link
 * @property int $staffid
 * @property int $contact_id
 * @property int $task_comment_id
 * @property \Carbon\Carbon $dateadded
 *
 * @package App\Models
 */
class Tblfile extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'rel_id' => 'int',
		'visible_to_customer' => 'int',
		'staffid' => 'int',
		'contact_id' => 'int',
		'task_comment_id' => 'int'
	];

	protected $dates = [
		'dateadded'
	];

	protected $fillable = [
		'rel_id',
		'rel_type',
		'file_name',
		'filetype',
		'visible_to_customer',
		'attachment_key',
		'external',
		'external_link',
		'thumbnail_link',
		'staffid',
		'contact_id',
		'task_comment_id',
		'dateadded'
	];
}
