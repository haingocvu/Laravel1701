<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $table = 'categories';
    public $timestamps = false;

    public function product() {
        return $this->hasMany('App\Products','id_type', 'id');
    }

    public function pageUrl() {
        return $this->belongsTo('App\PageUrl', 'id_url', 'id');
    }
}
