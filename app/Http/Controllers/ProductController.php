<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function add(){
    	return view('productAdd');
    }

    public function show(){
    	$typeofproduct = DB::table('product_type')->get();
        return view('productCheckList', ['typeofproduct' => $typeofproduct]);
    }

    public function process(){
        $result = DB::table('product_type')->insert(
            ['group' => $_POST['_group'], 'subgroup' => $_POST['_subgroup'],'name' => $_POST['_name'],'value' => $_POST['_value'],'price' => $_POST['_price']]
        );
        $typeofproduct = DB::table('product_type')->get();
        header('Location: https://odleral77.siteme.org/products/');
    }
}
