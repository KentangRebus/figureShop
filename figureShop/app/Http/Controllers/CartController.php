<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartDetail;
use App\Transaction;
use App\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $userId = auth()->user()->id;
        $total=0;
        $carts = DB::table('carts_header')
            ->join('cart_detail','carts_header.id','=','cart_detail.cartId')
            ->join('figures','cart_detail.figureId','=','figures.id')
            ->select('cart_detail.id','cart_detail.cartId','cart_detail.quantity','figures.name','figures.picture','figures.price')
            ->where('userId','=',$userId)
            ->get();
        return view('cart',compact('carts','total'));
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
        $userid = auth()->user()->id;
        $old = Cart::where('userId', '=', $userid)->first();
        if($old!=null){
            $detail = new CartDetail();
            $detail->cartId = $old->id;
            $detail->figureId = $request->figureId;
            $detail->quantity = 1;
            $detail->save();
        }
        else{
            $cart = new Cart();
            $cart->userId = $userid;
            $cart->save();

            $detail = new CartDetail();
            $detail->cartId = Cart::orderBy('id', 'desc')->first()->id;
            $detail->figureId = $request->figureId;
            $detail->quantity = 1;
            $detail->save();
        }

        return redirect()->back();
    }

    public function checkout(Request $request,$cartId){
        $userId = auth()->user()->id;

        $header = new Transaction();
        $header->userId=$userId;
        $header->date=Carbon::now();
        $header->save();

        $carts = DB::table('cart_detail')
            ->join('figures','cart_detail.figureId','=','figures.id')
            ->select('figures.id','cart_detail.quantity','figures.price')
            ->where('cartId','=',$cartId)
            ->get();

        foreach ($carts as $cart){
            $detail = new TransactionDetail();
            $detail->transactionId = $header->id;
            $detail->figureId = $cart->id;
            $detail->quantity = $cart->quantity;
            $detail->save();
        }

        Cart::destroy($cartId);
        CartDetail::where('cartId','=',$cartId)->delete();

        return redirect(url('/'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyDetail($id)
    {
        //
        CartDetail::destroy($id);
        return redirect()->back();
    }
}
