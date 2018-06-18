<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public $table = "bills";
    public $timestamps = false;

    public function product() {
        return $this->belongsToMany('App\Products', 'bill_detail', 'id_bill', 'id_product');
    }

    public function customer() {
        return $this->belongsTo('App\Customers', 'id_customer', 'id');
    }
}
