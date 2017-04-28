<?php

namespace SaleSystem;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $table = 'buyers';

    public $timestamps = false;

    protected $fillable = ['nombre', 'mail','telefono','direccion'];

    //
}
