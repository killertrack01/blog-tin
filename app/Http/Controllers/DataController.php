<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Post;

class DataController extends Controller
{
    // insert data
    public function insertData()
    {
        $cate = Category::all();
        $post = Post::with('cate')->orderByDesc('updated_at')->get();
        
        return view('index',compact('cate','post'));
    }
}
