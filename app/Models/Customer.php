<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = 'customers';
	public $timestamps = False;

    protected $fillable = [
		'customerNumber',
		'customerName',
		'contactLastName',
		'contactFirstName',
		'phone',
		'addressLine1',
		'addressLine2',
		'city',
		'state',
		'postalCode',
		'country',
		'salesRepEmployeeNumber',
		'creditLimit',
	];

	public function employees()
	{
		return $this->belongsTo(Employee::class, 'salesRepEmployeeNumber');
	}

	public function orders()
	{
		return $this->hasMany(Order::class, 'customerNumber');
	}

	public function payments()
	{
		return $this->hasOne(Payment::class);
	}
}

