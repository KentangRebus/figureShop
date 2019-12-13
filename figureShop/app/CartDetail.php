<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    //
    public $timestamps=false;
    protected $table="cart_detail";
//    public $item;

    public function header(){
        return $this->belongsTo(Cart::class,'id','cartId');
    }

    public function figure(){
        $this->attributes["item"] =  $this->hasOne(Figure::class,'id','figureId');
    }
}
