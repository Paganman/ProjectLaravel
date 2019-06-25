<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'orders';
	

    protected $fillable = [
		'orderNumber',
		'orderDate',
		'requiredDate',
		'shippedDate',
		'status',
		'comments',
		'customerNumber',
	];

	public function products()
	{
		return $this->belongsToMany(Product::class);
	}

	public function customers()
	{
		return $this->belongsTo(Customer::class, 'customerNumber');
	}
}
