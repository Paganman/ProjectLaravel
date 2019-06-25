<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public $timestamps = false;
    
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
	const UPDATED_AT = 'last_update';

	protected $fillable = [
		'productCode',
		'productName',
		'productLine',
		'productScale',
		'productVendor',
		'productDescription',
		'quantityInStock',
		'buyPrice',
		'MSRP',
	];

	protected $hidden = [

	];

	public function productLines()
	{
		return $this->belongsTo(ProductLine::class, 'productLine');
	}
	public function orders()
	{
		return $this->belongsToMany(Order::class);
	}
}
