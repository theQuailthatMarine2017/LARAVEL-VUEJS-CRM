<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 10 Sep 2019 11:53:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Tblinvoicepaymentsmode
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $show_on_pdf
 * @property int $invoices_only
 * @property int $expenses_only
 * @property int $selected_by_default
 * @property bool $active
 *
 * @package App\Models
 */
class Tblinvoicepaymentsmode extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'show_on_pdf' => 'int',
		'invoices_only' => 'int',
		'expenses_only' => 'int',
		'selected_by_default' => 'int',
		'active' => 'bool'
	];

	protected $fillable = [
		'name',
		'description',
		'show_on_pdf',
		'invoices_only',
		'expenses_only',
		'selected_by_default',
		'active'
	];
}
