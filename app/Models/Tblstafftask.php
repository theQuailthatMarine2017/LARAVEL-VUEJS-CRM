<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblstafftask
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $priority
 * @property \Carbon\Carbon $dateadded
 * @property \Carbon\Carbon $startdate
 * @property \Carbon\Carbon $duedate
 * @property \Carbon\Carbon $datefinished
 * @property int $addedfrom
 * @property bool $is_added_from_contact
 * @property int $status
 * @property string $recurring_type
 * @property int $repeat_every
 * @property int $recurring
 * @property int $is_recurring_from
 * @property int $cycles
 * @property int $total_cycles
 * @property bool $custom_recurring
 * @property \Carbon\Carbon $last_recurring_date
 * @property int $rel_id
 * @property string $rel_type
 * @property bool $is_public
 * @property bool $billable
 * @property bool $billed
 * @property int $invoice_id
 * @property float $hourly_rate
 * @property int $milestone
 * @property int $kanban_order
 * @property int $milestone_order
 * @property bool $visible_to_client
 * @property int $deadline_notified
 *
 * @package App\Models
 */
class Tblstafftask extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'priority' => 'int',
		'addedfrom' => 'int',
		'is_added_from_contact' => 'bool',
		'status' => 'int',
		'repeat_every' => 'int',
		'recurring' => 'int',
		'is_recurring_from' => 'int',
		'cycles' => 'int',
		'total_cycles' => 'int',
		'custom_recurring' => 'bool',
		'rel_id' => 'int',
		'is_public' => 'bool',
		'billable' => 'bool',
		'billed' => 'bool',
		'invoice_id' => 'int',
		'hourly_rate' => 'float',
		'milestone' => 'int',
		'kanban_order' => 'int',
		'milestone_order' => 'int',
		'visible_to_client' => 'bool',
		'deadline_notified' => 'int'
	];

	protected $dates = [
		'dateadded',
		'startdate',
		'duedate',
		'datefinished',
		'last_recurring_date'
	];

	protected $fillable = [
		'name',
		'description',
		'priority',
		'dateadded',
		'startdate',
		'duedate',
		'datefinished',
		'addedfrom',
		'is_added_from_contact',
		'status',
		'recurring_type',
		'repeat_every',
		'recurring',
		'is_recurring_from',
		'cycles',
		'total_cycles',
		'custom_recurring',
		'last_recurring_date',
		'rel_id',
		'rel_type',
		'is_public',
		'billable',
		'billed',
		'invoice_id',
		'hourly_rate',
		'milestone',
		'kanban_order',
		'milestone_order',
		'visible_to_client',
		'deadline_notified'
	];
}
