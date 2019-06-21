<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontController extends Controller
{
    public function index(){
        $products = Product::isVisible()->paginate(15);
        return view('front.index', ['products' => $products]);
    }

    public function showProduct(int $id){
      $product = Product::find($id);
      return view('front.product', ['product' => $product]);
    }

    public function solded(){
      $products = Product::isVisible()->where('status', 'solde')->paginate(15);
      return view('front.category', ['products' => $products]);
    }
    
    /*
    public function show(int $id){
        return Product::find($id);
    }

    public function take(string $string){
      return Product::find($id); // récupérer categories pour homme femmes ...
    }
    */
}
