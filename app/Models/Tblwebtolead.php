<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblwebtolead
 * 
 * @property int $id
 * @property string $form_key
 * @property int $lead_source
 * @property int $lead_status
 * @property int $notify_lead_imported
 * @property string $notify_type
 * @property string $notify_ids
 * @property int $responsible
 * @property string $name
 * @property string $form_data
 * @property int $recaptcha
 * @property string $submit_btn_name
 * @property string $success_submit_msg
 * @property string $language
 * @property int $allow_duplicate
 * @property int $mark_public
 * @property string $track_duplicate_field
 * @property string $track_duplicate_field_and
 * @property int $create_task_on_duplicate
 * @property \Carbon\Carbon $dateadded
 *
 * @package App\Models
 */
class Tblwebtolead extends Eloquent
{
	protected $table = 'tblwebtolead';
	public $timestamps = false;

	protected $casts = [
		'lead_source' => 'int',
		'lead_status' => 'int',
		'notify_lead_imported' => 'int',
		'responsible' => 'int',
		'recaptcha' => 'int',
		'allow_duplicate' => 'int',
		'mark_public' => 'int',
		'create_task_on_duplicate' => 'int'
	];

	protected $dates = [
		'dateadded'
	];

	protected $fillable = [
		'form_key',
		'lead_source',
		'lead_status',
		'notify_lead_imported',
		'notify_type',
		'notify_ids',
		'responsible',
		'name',
		'form_data',
		'recaptcha',
		'submit_btn_name',
		'success_submit_msg',
		'language',
		'allow_duplicate',
		'mark_public',
		'track_duplicate_field',
		'track_duplicate_field_and',
		'create_task_on_duplicate',
		'dateadded'
	];
}
