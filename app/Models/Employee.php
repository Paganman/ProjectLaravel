<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	protected $table = 'employees';
	public $timestamps = False;

    protected $fillable = [
		'employeeNumber',
		'lastName',
		'firstName',
		'extension',
		'email',
		'officeCode',
		'reportsTo',
		'jobTitle',
	];

	public function employees()
	{
		return $this->hasMany(Employee::class, 'employeeNumber');
	}

	public function offices()
	{
		return $this->belongTo(Office::class, 'officeCode');
	}

	public function customers()
	{
		return $this->hasMany(Customer::class, 'salesRepEmployeeNumber');
	}
}
