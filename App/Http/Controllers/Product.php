<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Products;
use App\Categories;
use App\Brands;
use App\Teamers;
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
        $slider = Products::where('slider', 1)
        ->orderBy('id')
        ->take(5)
        ->get();
        $category = Categories::all();
        $brand = Brands::all();
        $team = Teamers::all();
        return view('products.items', compact('product', 'category', 'brand', 'team', 'slider'));
        
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
        $product->brand = request('brand');
        // My checkbox hot value
        $my_hot_value = $request['hot'];
        if($my_hot_value === 'yes')
            $product->hot = 1;
        else
            $product->hot = 0;
        // My checkbox slider value
        $my_slider_value = $request['slider'];
        if($my_slider_value === 'yes')
            $product->slider = 1;
        else
            $product->slider = 0;
        
        $product->save();
        //You must save before uploading the picture
        if($request->hasFile('file')){
            $product->file->storeAs('public', $product->id);
        }

        return redirect('admin');
        
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
        $category = Categories::all();
        $brand = Brands::all();
        return view('products.edit', compact('product', 'category', 'brand'));
        
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
        $product->brand = request('brand');
        $product->price = request('price');
        $product->file = request('file');
        $my_hot_value = $request['hot'];
        if($my_hot_value === 'yes')
            $product->hot = 1;
        else
            $product->hot = 0;
        // My checkbox slider value
        $my_slider_value = $request['slider'];
        if($my_slider_value === 'yes')
            $product->slider = 1;
        else
            $product->slider = 0;
        if($request->hasFile('file'))
        {
            $product->file->storeAs('public', $product->id);
        }

        $product->save();
        return redirect('admin');

        
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
        DB::table('products')->update(['id' => DB::raw('GREATEST(id - 1, 0)')]);
        return redirect('admin');
    }


}
