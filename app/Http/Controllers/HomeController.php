<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Support\Facades\DB;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // $categories = DB::table('categories')->get();
        $categories = Category::all();
        return view('home', ['categories' => $categories]);
    }
}
