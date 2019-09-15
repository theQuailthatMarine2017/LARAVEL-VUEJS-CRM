<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblformquestion
 * 
 * @property int $questionid
 * @property int $rel_id
 * @property string $rel_type
 * @property string $question
 * @property bool $required
 * @property int $question_order
 *
 * @package App\Models
 */
class Tblformquestion extends Eloquent
{
	protected $primaryKey = 'questionid';
	public $timestamps = false;

	protected $casts = [
		'rel_id' => 'int',
		'required' => 'bool',
		'question_order' => 'int'
	];

	protected $fillable = [
		'rel_id',
		'rel_type',
		'question',
		'required',
		'question_order'
	];
}
