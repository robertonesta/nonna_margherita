<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderByDesc('id')->get();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        #dd($request->all());
        $data =[
            "name" => $request->name,
            "price" => $request->price, 
            "img" => $request->img, 
            "in_stock" => $request->in_stock, 
            "weight" => $request->weight, 
            "product_code" => $request->product_code, 
            "description" => $request->description, 
        ];
        Product::create($data);
        return to_route('admin.products.index')->with('message','is add new item');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
       return view('admin.products.show',compact('product')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        #dd($request->all());
        $data =[
            "name" => $request->name,
            "price" => $request->price, 
            "img" => $request->img, 
            "in_stock" => $request->in_stock, 
            "weight" => $request->weight, 
            "product_code" => $request->product_code, 
            "description" => $request->description, 
        ];
        $product->update($data);
        return to_route('admin.products.index')->with('message','is upadate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('admin.products.index')->with('message','is delete');
    }
}