<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Figure extends Model
{
    //
    public $timestamps=false;

    public function category(){
        return $this->belongsTo(category::class,'categoryId','id');
    }

    public function detail(){
        return $this->belongsToMany(CartDetail::class);
    }
}
