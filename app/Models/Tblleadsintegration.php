<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblleadsintegration
 * 
 * @property int $id
 * @property int $active
 * @property string $email
 * @property string $imap_server
 * @property string $password
 * @property int $check_every
 * @property int $responsible
 * @property int $lead_source
 * @property int $lead_status
 * @property string $encryption
 * @property string $folder
 * @property string $last_run
 * @property bool $notify_lead_imported
 * @property bool $notify_lead_contact_more_times
 * @property string $notify_type
 * @property string $notify_ids
 * @property int $mark_public
 * @property bool $only_loop_on_unseen_emails
 * @property int $delete_after_import
 * @property int $create_task_if_customer
 *
 * @package App\Models
 */
class Tblleadsintegration extends Eloquent
{
	protected $table = 'tblleadsintegration';
	public $timestamps = false;

	protected $casts = [
		'active' => 'int',
		'check_every' => 'int',
		'responsible' => 'int',
		'lead_source' => 'int',
		'lead_status' => 'int',
		'notify_lead_imported' => 'bool',
		'notify_lead_contact_more_times' => 'bool',
		'mark_public' => 'int',
		'only_loop_on_unseen_emails' => 'bool',
		'delete_after_import' => 'int',
		'create_task_if_customer' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'active',
		'email',
		'imap_server',
		'password',
		'check_every',
		'responsible',
		'lead_source',
		'lead_status',
		'encryption',
		'folder',
		'last_run',
		'notify_lead_imported',
		'notify_lead_contact_more_times',
		'notify_type',
		'notify_ids',
		'mark_public',
		'only_loop_on_unseen_emails',
		'delete_after_import',
		'create_task_if_customer'
	];
}
