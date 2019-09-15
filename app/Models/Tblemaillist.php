<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblemaillist
 * 
 * @property int $listid
 * @property string $name
 * @property string $creator
 * @property \Carbon\Carbon $datecreated
 *
 * @package App\Models
 */
class Tblemaillist extends Eloquent
{
	protected $primaryKey = 'listid';
	public $timestamps = false;

	protected $dates = [
		'datecreated'
	];

	protected $fillable = [
		'name',
		'creator',
		'datecreated'
	];
}
