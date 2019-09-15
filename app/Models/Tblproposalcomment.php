<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblproposalcomment
 * 
 * @property int $id
 * @property string $content
 * @property int $proposalid
 * @property int $staffid
 * @property \Carbon\Carbon $dateadded
 *
 * @package App\Models
 */
class Tblproposalcomment extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'proposalid' => 'int',
		'staffid' => 'int'
	];

	protected $dates = [
		'dateadded'
	];

	protected $fillable = [
		'content',
		'proposalid',
		'staffid',
		'dateadded'
	];
}
