<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblknowledgebase
 * 
 * @property int $articleid
 * @property int $articlegroup
 * @property string $subject
 * @property string $description
 * @property string $slug
 * @property int $active
 * @property \Carbon\Carbon $datecreated
 * @property int $article_order
 * @property int $staff_article
 *
 * @package App\Models
 */
class Tblknowledgebase extends Eloquent
{
	protected $table = 'tblknowledgebase';
	protected $primaryKey = 'articleid';
	public $timestamps = false;

	protected $casts = [
		'articlegroup' => 'int',
		'active' => 'int',
		'article_order' => 'int',
		'staff_article' => 'int'
	];

	protected $dates = [
		'datecreated'
	];

	protected $fillable = [
		'articlegroup',
		'subject',
		'description',
		'slug',
		'active',
		'datecreated',
		'article_order',
		'staff_article'
	];
}
