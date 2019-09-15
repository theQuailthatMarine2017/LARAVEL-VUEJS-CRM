<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblcustomfield
 * 
 * @property int $id
 * @property string $fieldto
 * @property string $name
 * @property string $slug
 * @property bool $required
 * @property string $type
 * @property string $options
 * @property bool $display_inline
 * @property int $field_order
 * @property int $active
 * @property int $show_on_pdf
 * @property bool $show_on_ticket_form
 * @property bool $only_admin
 * @property bool $show_on_table
 * @property int $show_on_client_portal
 * @property int $disalow_client_to_edit
 * @property int $bs_column
 *
 * @package App\Models
 */
class Tblcustomfield extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'required' => 'bool',
		'display_inline' => 'bool',
		'field_order' => 'int',
		'active' => 'int',
		'show_on_pdf' => 'int',
		'show_on_ticket_form' => 'bool',
		'only_admin' => 'bool',
		'show_on_table' => 'bool',
		'show_on_client_portal' => 'int',
		'disalow_client_to_edit' => 'int',
		'bs_column' => 'int'
	];

	protected $fillable = [
		'fieldto',
		'name',
		'slug',
		'required',
		'type',
		'options',
		'display_inline',
		'field_order',
		'active',
		'show_on_pdf',
		'show_on_ticket_form',
		'only_admin',
		'show_on_table',
		'show_on_client_portal',
		'disalow_client_to_edit',
		'bs_column'
	];
}
