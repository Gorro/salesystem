<?php

namespace SaleSystem;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public $timestamps = false;
    public function fragrance()
    {
        return $this->hasOne('SaleSystem\Fragrance');
    }
    public function cartera()
    {
        return $this->hasOne('SaleSystem\Cartera');
    }
}
