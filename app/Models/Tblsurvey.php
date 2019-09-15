<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblsurvey
 * 
 * @property int $surveyid
 * @property string $subject
 * @property string $slug
 * @property string $description
 * @property string $viewdescription
 * @property \Carbon\Carbon $datecreated
 * @property string $redirect_url
 * @property bool $send
 * @property int $onlyforloggedin
 * @property string $fromname
 * @property bool $iprestrict
 * @property bool $active
 * @property string $hash
 *
 * @package App\Models
 */
class Tblsurvey extends Eloquent
{
	protected $primaryKey = 'surveyid';
	public $timestamps = false;

	protected $casts = [
		'send' => 'bool',
		'onlyforloggedin' => 'int',
		'iprestrict' => 'bool',
		'active' => 'bool'
	];

	protected $dates = [
		'datecreated'
	];

	protected $fillable = [
		'subject',
		'slug',
		'description',
		'viewdescription',
		'datecreated',
		'redirect_url',
		'send',
		'onlyforloggedin',
		'fromname',
		'iprestrict',
		'active',
		'hash'
	];
}
