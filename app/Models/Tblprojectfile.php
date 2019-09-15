<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblprojectfile
 * 
 * @property int $id
 * @property string $file_name
 * @property string $subject
 * @property string $description
 * @property string $filetype
 * @property \Carbon\Carbon $dateadded
 * @property \Carbon\Carbon $last_activity
 * @property int $project_id
 * @property bool $visible_to_customer
 * @property int $staffid
 * @property int $contact_id
 * @property string $external
 * @property string $external_link
 * @property string $thumbnail_link
 *
 * @package App\Models
 */
class Tblprojectfile extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'project_id' => 'int',
		'visible_to_customer' => 'bool',
		'staffid' => 'int',
		'contact_id' => 'int'
	];

	protected $dates = [
		'dateadded',
		'last_activity'
	];

	protected $fillable = [
		'file_name',
		'subject',
		'description',
		'filetype',
		'dateadded',
		'last_activity',
		'project_id',
		'visible_to_customer',
		'staffid',
		'contact_id',
		'external',
		'external_link',
		'thumbnail_link'
	];
}
