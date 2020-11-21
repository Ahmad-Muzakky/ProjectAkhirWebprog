<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function productorder(){
        return $this->belongsTo('App\product', 'product_id','id');
    }
    public function detailorder(){
        return $this->hasMany('App\detail', 'order_id','id');
    }
}
