<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;
use App\Category;
use App\Post;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'nbusers' => User::all()->count(),
            'nbcategory' => Category::all()->count(),
            'nbposts' => Post::all()->count()
        ]);
    }
}




