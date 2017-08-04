<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;
use Visitor;


class NewsController extends Controller
{
    //公司新闻
    public function company()
    {
        $posts=Post::where('columns','j')
            ->orderBy('order')
            ->orderBy('updated_at','desc')
            ->paginate(4);
        return view('news.center',compact('posts'));
    }

    public function show($id)
    {
        $posts=Post::findOrFail($id);
        Post::findOrFail($id)->increment('clicks', 3);

        return view('news.show',compact('posts'));

    }
}
