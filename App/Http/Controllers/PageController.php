<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class PageController extends Controller
{

    public function home() {
        $seems = [
            'Seem is cool',
            'Seem is a seem',
            'Seem is Russian',
            'Seem is hot',
        ];

        return view('index', [
            'seems' => $seems
        ]);
    }

    public function about() {
        return view('about');
    }
   
    public function contact() {
        return view('contact');
    }
    public function products() {
        return view('products.items');
    }

    public function products1() {
        return view('products.laptops');
    }
   
    public function admin() {
        return view('products.mytable');
    }

    
    
}
/*
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
 */
