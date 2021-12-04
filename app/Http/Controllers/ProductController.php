<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show_table($id){
        return view('site.table.product', ["id" => $id]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view("admin.table.product");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form.add_product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'id' => 'unique',
            'name'=>'required|string|min:3',
            'price'=>'required',
            'desc'=>'required',
            'c_id'=>'required',
            'image'=>'required|image',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->desc = $request->desc;
        $product->c_id = $request->c_id;
        if ($image = $request->file('image')) {
            $imageDestinationPath = 'uploads/product_images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postImage);
            $product->image = $postImage;
        }

        $product->save();

        return redirect()->route('table.product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::check()){
            return view('site.show.product',["id" => $id]);
        }
        return redirect()->route('login');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        $id = $product['id'];
        $name = $product['name'];
        $price = $product['price'];
        $desc = $product['desc'];
        $c_id = $product['c_id'];
        $image = $product['image'];

        return view('admin.form.edit_product',['id'=>$id,'name'=>$name,'price'=>$price,'desc'=>$desc,'c_id'=>$c_id,'image'=>$image]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'=>'required|string|min:3',
            'price'=>'required',
            'desc'=>'required',
            'c_id'=>'required',
            'image'=>'required|image',
        ]);

        $name = $request->input('name');
        $price = $request->input('price');
        $desc = $request->input('desc');
        $c_id = $request->input('c_id');
        $id = $request->input('id');

        if ($image = $request->file('image')) {
            $imageDestinationPath = 'uploads/product_images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $postImage);
            $image = "$postImage";
        }else{
            $image = "image.png";
        }

        Product::where('id',$id)->update(['name' => $name,'price' => $price,'desc' => $desc,'c_id' => $c_id,'image' => $image,]);

        return redirect()->route('table.product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
