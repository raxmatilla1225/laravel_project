<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arr_id = [];
        $e = 0;

        foreach (Cart::all('pr_id') as $item) {
            $arr_id[$e++] = $item->id;
        }

        $t = false;

        for ($i = 0; $i < $e; $i++) {
            if (intval($arr_id[$i]) != intval($request->input('id'))) {
                $t = true;
            } else {
                $t = false;
                break;
            }
        };

        if($t){
//            $id = $request->input('id');
//            $count = $request->input('count');
//
//            $data = Product::where('id', $id)->get();
//            foreach ($data as $item) {
//                $name = $item->name;
//                $price = $item->price;
//                $image = $item->image;
//                $pr_id = $item->id;
//            }
//            $total = $count * $price;
//
//            $cart = new Cart();
//
//            $cart->name = $name;
//            $cart->count = $count;
//            $cart->price = $price;
//            $cart->total = $total;
//            $cart->image = $image;
//            $cart->pr_id = $pr_id;
//            $cart->save();
//
//            return redirect()->route('techno.store');
            return Cart::all('pr_id').' '.$request->input('id');

        }else{
//            Cart::where('id',$id)->get('count');

//            $id = $request->input('id');
//            $old_count = DB::select("SELECT `count` from `carts` where pr_id = $id");
//            $price = DB::select("SELECT `price` from `carts` where pr_id = $id");
//
//        $new_count =  $request->input('count');
//
//        $count = $old_count+$new_count;
//
//        $total = $count*intval($price);
//
//            DB::update("UPDATE `carts` set `count`  $count, `total` = $total where pr_id = $id");
//
//
//        return redirect()->route('techno.store');
            return 'update';

        }







        return redirect()->route('techno.store');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Cart::find($id);
        if ($article) {
            $article->delete();
        }
        return redirect()->back();
    }
}
