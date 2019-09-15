<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblpredefinedreply
 * 
 * @property int $id
 * @property string $name
 * @property string $message
 *
 * @package App\Models
 */
class Tblpredefinedreply extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'name',
		'message'
	];
}
