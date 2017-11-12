<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function Orders(){
      return $this->belongsToMany('App\Order');
    }
}
