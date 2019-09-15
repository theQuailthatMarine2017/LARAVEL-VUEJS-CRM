<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblusermetum
 * 
 * @property int $umeta_id
 * @property int $staff_id
 * @property int $client_id
 * @property int $contact_id
 * @property string $meta_key
 * @property string $meta_value
 *
 * @package App\Models
 */
class Tblusermetum extends Eloquent
{
	protected $primaryKey = 'umeta_id';
	public $timestamps = false;

	protected $casts = [
		'staff_id' => 'int',
		'client_id' => 'int',
		'contact_id' => 'int'
	];

	protected $fillable = [
		'staff_id',
		'client_id',
		'contact_id',
		'meta_key',
		'meta_value'
	];
}
