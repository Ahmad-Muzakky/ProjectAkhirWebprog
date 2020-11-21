<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    public function productdetail(){
        return $this->belongsTo('App\product', 'product_id','id');
    }
    public function orderdetail(){
        return $this->belongsTo('App\order', 'order_id','id');
    }
}
