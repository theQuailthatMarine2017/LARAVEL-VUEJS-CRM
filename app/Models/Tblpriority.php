<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblpriority
 * 
 * @property int $priorityid
 * @property string $name
 *
 * @package App\Models
 */
class Tblpriority extends Eloquent
{
	protected $primaryKey = 'priorityid';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
