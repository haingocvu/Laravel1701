<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
   public $table = "products";
   //protected $primaryKey = 'id';
   public $timestamps = false;

   public function categories() {
       return $this->belongsTo('App\categories', 'id_type', 'id');
   }

   public function pageUrl() {
       return $this->belongsTo('App\PageUrl', 'id_url', 'id');
   }

   public function bill() {
       return $this->belongsToMany('App\Bill', 'bill_detail', 'id_product', 'id_bill');
   }
}
