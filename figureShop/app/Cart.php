<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public $timestamps=false;
    protected $table="carts_header";

    public function detail(){
        return $this->hasMany(CartDetail::class,'cartId','id');
    }
}
