<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;
use Visitor;


class NewsController extends Controller
{
    //金砖动态
    public function company()
    {
        $posts=Post::where('columns','j')
            ->orderBy('order')
            ->orderBy('updated_at','desc')
            ->paginate(6);
        $title="金砖动态";

        return view('news.center',compact('posts','title'));
    }

    //行业资讯
    public function trade()
    {
        $posts=Post::where('columns','h')
            ->orderBy('order')
            ->orderBy('updated_at','desc')
            ->paginate(6);
        $title='行业资讯';

        return view('news.center',compact('posts','title'));
    }

    //新闻内容
    public function show($id)
    {
        $posts=Post::findOrFail($id);
        Post::findOrFail($id)->increment('clicks', 3);
        $title=$posts->title;
        return view('news.show',compact('posts','title'));

    }
}
