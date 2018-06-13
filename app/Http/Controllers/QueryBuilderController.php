<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class QueryBuilderController extends Controller
{
    function index() {
        // $rs = DB::table('products')
        // ->select('name', 'price')
        // ->where([
        //     ['id', '<=', '10']
        // ])
        // ->orderBy('id', 'DESC')
        // ->offset(3)
        // ->limit(5)
        // ->get();
        // $rs = DB::table('bills')
        // ->whereDay('date_order', 23)
        // ->where([
        //     ['total', '>=', 3000000]
        // ])
        // ->orWhereDay('date_order', 24)
        // ->get();
        $rs = DB::table('products')
        ->selectRaw('categories.name as category, count(products.id) as total')
        ->join('categories', 'products.id_type', '=', 'categories.id')
        ->groupBy('categories.name')
        ->having('total', '>=', 8)
        ->get();
        dd($rs);
        // foreach ($rs as $key => $user) {
        //     echo $user->username;
        //     echo "</br>";
        // }
    }
}
