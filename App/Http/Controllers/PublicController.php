<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Products;
use App\Categories;
use App\Brands;
use App\Teamers;
class PublicController extends Controller
{
    
    public function admin(Request $request)
    {
        $product = Products::all();
        $category = Categories::all();
        $brand = Brands::all();
        $team = Teamers::all();
        return view('products.mytable', compact('product', 'category', 'brand', 'team'));
    }

    public function home()
    {
        $product = Products::all()->where('hot', 1);
        $category = Categories::all();
        $brand = Brands::all();
        $team = Teamers::all();
        return view('index', compact('product', 'category', 'brand', 'team'));
    }

    public function store() {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
    }

    public function maintenance()
    {
        return view('maintenance.index');
    }
}
