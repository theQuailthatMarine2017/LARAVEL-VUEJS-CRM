<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Tblstaff
 * 
 * @property int $staffid
 * @property string $email
 * @property string $firstname
 * @property string $lastname
 * @property string $facebook
 * @property string $linkedin
 * @property string $phonenumber
 * @property string $skype
 * @property string $password
 * @property \Carbon\Carbon $datecreated
 * @property string $profile_image
 * @property string $last_ip
 * @property \Carbon\Carbon $last_login
 * @property \Carbon\Carbon $last_activity
 * @property \Carbon\Carbon $last_password_change
 * @property string $new_pass_key
 * @property \Carbon\Carbon $new_pass_key_requested
 * @property int $admin
 * @property int $role
 * @property int $active
 * @property string $default_language
 * @property string $direction
 * @property string $media_path_slug
 * @property int $is_not_staff
 * @property float $hourly_rate
 * @property bool $two_factor_auth_enabled
 * @property string $two_factor_auth_code
 * @property \Carbon\Carbon $two_factor_auth_code_requested
 * @property string $email_signature
 *
 * @package App\Models
 */
class Tblstaff extends Authenticatable
{
	protected $table = 'tblstaff';
	protected $primaryKey = 'staffid';
	public $timestamps = false;

	protected $casts = [
		'admin' => 'int',
		'role' => 'int',
		'active' => 'int',
		'is_not_staff' => 'int',
		'hourly_rate' => 'float',
		'two_factor_auth_enabled' => 'bool'
	];

	protected $dates = [
		'datecreated',
		'last_login',
		'last_activity',
		'last_password_change',
		'new_pass_key_requested',
		'two_factor_auth_code_requested'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'email',
		'firstname',
		'lastname',
		'facebook',
		'linkedin',
		'phonenumber',
		'skype',
		'password',
		'datecreated',
		'profile_image',
		'last_ip',
		'last_login',
		'last_activity',
		'last_password_change',
		'new_pass_key',
		'new_pass_key_requested',
		'admin',
		'role',
		'active',
		'default_language',
		'direction',
		'media_path_slug',
		'is_not_staff',
		'hourly_rate',
		'two_factor_auth_enabled',
		'two_factor_auth_code',
		'two_factor_auth_code_requested',
		'email_signature'
	];
}
