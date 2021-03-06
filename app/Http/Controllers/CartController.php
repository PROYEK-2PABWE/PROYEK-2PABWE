<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Routing\Controller;
=======
use App\Http\Controllers\Controller;
>>>>>>> c7cf291c9057971e92973a314b8086837f91b699

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $itemcart = Cart::where('user_id', $request->user()->id)
            ->where('status_cart', 'cart')
            ->first();

        return view('cart.index', [
            'title' => 'Shopping Cart',
            'itemcart' => $itemcart
        ])->with('no', 1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }

    public function kosongkan($id)
    {
        $itemcart = Cart::findOrFail($id);
        $itemcart->detail()->delete(); //hapus semua item di cart detail
        $itemcart->updatetotal($itemcart, '-' . $itemcart->subtotal);
        return back()->with('success', 'Cart berhasil dikosongkan');
    }
}
