<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblcountry
 * 
 * @property int $country_id
 * @property string $iso2
 * @property string $short_name
 * @property string $long_name
 * @property string $iso3
 * @property string $numcode
 * @property string $un_member
 * @property string $calling_code
 * @property string $cctld
 *
 * @package App\Models
 */
class Tblcountry extends Eloquent
{
	protected $primaryKey = 'country_id';
	public $timestamps = false;

	protected $fillable = [
		'iso2',
		'short_name',
		'long_name',
		'iso3',
		'numcode',
		'un_member',
		'calling_code',
		'cctld'
	];
}
