<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Products;

use App\PageUrl;

use App\Categories;

use App\User;

use App\Bill;

use App\Customers;

class EloquentController extends Controller
{
    function index() {
        // $rs = Products::select('name', 'price', 'detail')
        //                 ->orderBy('price', 'DESC')
        //                 ->orderBy('name', 'ASC')
        //                 ->limit(8)
        //                 ->get();
        // foreach ($rs as $key => $product) {
        //     echo $product->name;
        //     echo "</br>";
        // }
        //$rs = PageUrl::with('categories')->limit(2)->get();
        // $rs  = Categories::with('product', 'pageUrl', 'product.pageUrl')
        //                     ->offset(5)
        //                     ->limit(1)
        //                     ->get();
        // foreach ($rs as $key => $category) {
        //     echo $key.". ".$category->name."<br />";
        //     foreach ($category->product as $product) {
        //         echo "-".$product->name."</br />";
        //     }
        //     echo "<hr />";
        // }
        //$rs = Categories::with('pageUrl')->get();
        //$rs = PageUrl::with('products')->limit(2)->get();
        //$rs = User::with('role')->get();
        //$rs = Products::with('bill', 'bill.customer')->limit(2)->get();
        $rs = Customers::with('billDetail')->get();
        dd($rs);
    }
}
