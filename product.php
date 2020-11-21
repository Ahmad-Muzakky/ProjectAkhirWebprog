<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function order(){
        return $this->hasMany('App\order', 'product_id','id');
    }
    public function detail(){
        return $this->hasMany('App\detail', 'product_id','id');
    }
}
