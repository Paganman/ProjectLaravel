<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
	public $timestamps = False;

	protected $table = 'productlines';



    protected $fillable = [
		'productLine',
		'textDescription',
		'htmlDescription',
		'image',
	];

	public function products() 
	{
		return $this->hasMany(Product::class, 'productLine');
	}

}
