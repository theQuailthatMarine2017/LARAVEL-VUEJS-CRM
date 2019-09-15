<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblknowledgebasegroup
 * 
 * @property int $groupid
 * @property string $name
 * @property string $group_slug
 * @property string $description
 * @property int $active
 * @property string $color
 * @property int $group_order
 *
 * @package App\Models
 */
class Tblknowledgebasegroup extends Eloquent
{
	protected $primaryKey = 'groupid';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int',
		'group_order' => 'int'
	];

	protected $fillable = [
		'name',
		'group_slug',
		'description',
		'active',
		'color',
		'group_order'
	];
}
