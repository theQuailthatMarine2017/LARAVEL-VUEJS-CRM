<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblemailtemplate
 * 
 * @property int $emailtemplateid
 * @property string $type
 * @property string $slug
 * @property string $language
 * @property string $name
 * @property string $subject
 * @property string $message
 * @property string $fromname
 * @property string $fromemail
 * @property int $plaintext
 * @property int $active
 * @property int $order
 *
 * @package App\Models
 */
class Tblemailtemplate extends Eloquent
{
	protected $primaryKey = 'emailtemplateid';
	public $timestamps = false;

	protected $casts = [
		'plaintext' => 'int',
		'active' => 'int',
		'order' => 'int'
	];

	protected $fillable = [
		'type',
		'slug',
		'language',
		'name',
		'subject',
		'message',
		'fromname',
		'fromemail',
		'plaintext',
		'active',
		'order'
	];
}
