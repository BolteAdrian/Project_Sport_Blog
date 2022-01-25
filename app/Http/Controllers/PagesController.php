<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Post;
use DB;



//controller pentru home page si about
class PagesController extends Controller
{
    public function index(){
       
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('pages.index')->with('posts', $posts);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }


}
