<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Products;
// use App\Product;
class Product extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $product = Products::all();
        return view('products.items', compact('product'));
        
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
        $product = new Products();

        $product->title = request('title');
        $product->category = request('category');
        $product->description = request('description');
        $product->price = request('price');
        $product->file = request('file');
        
        
        $product->save();
        //You must save before uploading the picture
        if($request->hasFile('file')){
            $product->file->storeAs('public', $product->id);
        }

        return redirect('products');
        
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
        
        $product = Products::find($id);
        
        return view('products.edit', compact('product'));
        dd($product);
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
        $product = Products::find($id);
        
        
        $product->title = request('title');
        $product->category = request('category');
        $product->description = request('description');
        $product->price = request('price');
        $product->file = request('file');
        
        if($request->hasFile('file')){
            $product->file->storeAs('public', $product->id);
        }
        
        
        $product->save();
        
        

        return redirect('products#');
        dd('teds');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::find($id)->delete();
        DB::table('products')->decrement('id');
        return redirect('/products');
    }


}
