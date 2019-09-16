<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use App\Team;
use App\Page;
use App\Post;
use App\Category;
use App\Blog;

class FrontendController extends Controller
{
    public function index(){
        $teams=Team::all();
        $pages=Page::all();
        $blogs=Blog::all();
        $carousels=Carousel::all();
        return view('index')->with('teams',$teams)->with('pages',$pages)->with('blogs',$blogs)->with('carousels',$carousels);
    }
}
