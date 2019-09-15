<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblprojectdiscussioncomment
 * 
 * @property int $id
 * @property int $discussion_id
 * @property string $discussion_type
 * @property int $parent
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 * @property string $content
 * @property int $staff_id
 * @property int $contact_id
 * @property string $fullname
 * @property string $file_name
 * @property string $file_mime_type
 *
 * @package App\Models
 */
class Tblprojectdiscussioncomment extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'discussion_id' => 'int',
		'parent' => 'int',
		'staff_id' => 'int',
		'contact_id' => 'int'
	];

	protected $dates = [
		'created',
		'modified'
	];

	protected $fillable = [
		'discussion_id',
		'discussion_type',
		'parent',
		'created',
		'modified',
		'content',
		'staff_id',
		'contact_id',
		'fullname',
		'file_name',
		'file_mime_type'
	];
}
