<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Products;
use App\Categories;

class PublicController extends Controller
{
    
    public function admin(Request $request)
    {
        $product = Products::all();
        $category = Categories::all();
        return view('products.mytable', compact('product', 'category'));
    }

    public function home()
    {
        return view('index');
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
