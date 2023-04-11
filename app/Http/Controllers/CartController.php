<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class CartController extends Controller
{

    public function productList()
    {
        $product = Product::all();

         return view('customer.cart', ['product' =>  $product]);
    }

    public function cartList()
    {
        return view('cart');
    }

    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'productname' => $request->name,
            'price' => $request->price,
            'saleprice' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

}
