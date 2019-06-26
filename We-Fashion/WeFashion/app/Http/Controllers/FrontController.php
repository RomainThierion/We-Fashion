<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontController extends Controller
{
    // Home view
    public function index(){
        $products = Product::isVisible()->paginate(15);
        return view('front.index', ['products' => $products]);
    }
    // Product view
    public function showProduct(int $id){
      $product = Product::find($id);
      return view('front.product', ['product' => $product]);
    }
    // Solded view
    public function solded(){
      $products = Product::isVisible()->where('status', 'solde')->paginate(15);
      return view('front.category', ['products' => $products]);
    }
    // Women articles view
    public function women(){
      $products = Product::isVisible()->paginate(15);
      return view('front.women', ['products' => $products]);
    }
    // Men articles view
    public function men(){
      $products = Product::isVisible()->paginate(15);
      return view('front.men', ['products' => $products]);
    }
}
