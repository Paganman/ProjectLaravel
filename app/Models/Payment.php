<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
	protected $table = 'payments';
	

    protected $fillable = [
		'customerNumber',
		'checkNumber',
		'paymentDate',
		'amount',
	];

	public function customers()
	{
		return $this->belongsTo(Customer::class);
	}
}
