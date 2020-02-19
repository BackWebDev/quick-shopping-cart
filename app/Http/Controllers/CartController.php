<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $title = 'Shopping Cart';

        $cart = Session::get('cart');

        $totalSum = 0;

        foreach ($cart as $product){

            $totalOfProduct = $product['quantity'] * $product['price'];

            $totalSum += $totalOfProduct;

        }
        return view('cart.index', compact('cart', 'title', 'totalSum'));
    }

    public function deleteFromCart(Request $request)
    {
        if($request->id) {

            $cart = Session::get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                Session::put('cart', $cart);
            }

            return redirect()->back();
        }
    }
}
