<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tbluserautologin
 * 
 * @property string $key_id
 * @property int $user_id
 * @property string $user_agent
 * @property string $last_ip
 * @property \Carbon\Carbon $last_login
 * @property int $staff
 *
 * @package App\Models
 */
class Tbluserautologin extends Eloquent
{
	protected $table = 'tbluserautologin';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'staff' => 'int'
	];

	protected $dates = [
		'last_login'
	];

	protected $fillable = [
		'key_id',
		'user_id',
		'user_agent',
		'last_ip',
		'last_login',
		'staff'
	];
}
