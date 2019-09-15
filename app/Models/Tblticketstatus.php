<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblticketstatus
 * 
 * @property int $ticketstatusid
 * @property string $name
 * @property int $isdefault
 * @property string $statuscolor
 * @property int $statusorder
 *
 * @package App\Models
 */
class Tblticketstatus extends Eloquent
{
	protected $table = 'tblticketstatus';
	protected $primaryKey = 'ticketstatusid';
	public $timestamps = false;

	protected $casts = [
		'isdefault' => 'int',
		'statusorder' => 'int'
	];

	protected $fillable = [
		'name',
		'isdefault',
		'statuscolor',
		'statusorder'
	];
}
