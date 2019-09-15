<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblformquestionboxesdescription
 * 
 * @property int $questionboxdescriptionid
 * @property string $description
 * @property string $boxid
 * @property int $questionid
 *
 * @package App\Models
 */
class Tblformquestionboxesdescription extends Eloquent
{
	protected $table = 'tblformquestionboxesdescription';
	protected $primaryKey = 'questionboxdescriptionid';
	public $timestamps = false;

	protected $casts = [
		'questionid' => 'int'
	];

	protected $fillable = [
		'description',
		'boxid',
		'questionid'
	];
}
