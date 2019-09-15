<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TbltagsIn
 * 
 * @property int $rel_id
 * @property string $rel_type
 * @property int $tag_id
 * @property int $tag_order
 *
 * @package App\Models
 */
class TbltagsIn extends Eloquent
{
	protected $table = 'tbltags_in';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'rel_id' => 'int',
		'tag_id' => 'int',
		'tag_order' => 'int'
	];

	protected $fillable = [
		'rel_id',
		'rel_type',
		'tag_id',
		'tag_order'
	];
}
