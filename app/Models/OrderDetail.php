<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
	protected $table = 'orderdetails';
	public $timestamps = False;

    protected $fillable = [
		'orderNumber',
		'productCode',
		'quantityOrdered',
		'priceEach',
		'orderLineNumber',
	];

	
}
