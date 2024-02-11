<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $featured_products = DB::table('products')->get();
        return view('frontend.index',compact('featured_products'));
    }
}
