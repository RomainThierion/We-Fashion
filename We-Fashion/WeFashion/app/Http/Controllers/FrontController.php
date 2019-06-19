<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontController extends Controller
{
    public function index(){
        return Product::all();
    }
    
    public function show(int $id){
        return Product::find($id);
    }
}
