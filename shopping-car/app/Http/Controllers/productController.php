<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productss;

class productController extends Controller
{
   public function getIndex()
   {
   	$products=productss::all();

   	return view('shop.index',['products'=>$products]);
   }
}
