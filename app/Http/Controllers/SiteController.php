<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SiteController extends Controller
{
    public function index()
    {
        $data=[
           'posts' => Post::all(),
        ];
        return view ('home',$data);
    }
    public function createPost(Request $request){
        $post       = new Post;
        $post->text =$request->text;
        $post->save();
        return redirect()->route('home');
    }
}
