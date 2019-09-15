<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblcontact
 * 
 * @property int $id
 * @property int $userid
 * @property int $is_primary
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $phonenumber
 * @property string $title
 * @property \Carbon\Carbon $datecreated
 * @property string $password
 * @property string $new_pass_key
 * @property \Carbon\Carbon $new_pass_key_requested
 * @property \Carbon\Carbon $email_verified_at
 * @property string $email_verification_key
 * @property \Carbon\Carbon $email_verification_sent_at
 * @property string $last_ip
 * @property \Carbon\Carbon $last_login
 * @property \Carbon\Carbon $last_password_change
 * @property bool $active
 * @property string $profile_image
 * @property string $direction
 * @property bool $invoice_emails
 * @property bool $estimate_emails
 * @property bool $credit_note_emails
 * @property bool $contract_emails
 * @property bool $task_emails
 * @property bool $project_emails
 * @property bool $ticket_emails
 *
 * @package App\Models
 */
class Tblcontact extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'userid' => 'int',
		'is_primary' => 'int',
		'active' => 'bool',
		'invoice_emails' => 'bool',
		'estimate_emails' => 'bool',
		'credit_note_emails' => 'bool',
		'contract_emails' => 'bool',
		'task_emails' => 'bool',
		'project_emails' => 'bool',
		'ticket_emails' => 'bool'
	];

	protected $dates = [
		'datecreated',
		'new_pass_key_requested',
		'email_verified_at',
		'email_verification_sent_at',
		'last_login',
		'last_password_change'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'userid',
		'is_primary',
		'firstname',
		'lastname',
		'email',
		'phonenumber',
		'title',
		'datecreated',
		'password',
		'new_pass_key',
		'new_pass_key_requested',
		'email_verified_at',
		'email_verification_key',
		'email_verification_sent_at',
		'last_ip',
		'last_login',
		'last_password_change',
		'active',
		'profile_image',
		'direction',
		'invoice_emails',
		'estimate_emails',
		'credit_note_emails',
		'contract_emails',
		'task_emails',
		'project_emails',
		'ticket_emails'
	];
}
