<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;
use Visitor;


class NewsController extends Controller
{
    protected $navColumn='新闻动态';

    //金砖动态
    public function company()
    {
        $posts=Post::where('columns','j')
            ->orderBy('order')
            ->orderBy('created_at','desc')
            ->paginate(6);
        $title="金砖动态";
        $navColumn=$this->navColumn;

        return view('news.center',compact('posts','title','navColumn'));
    }

    //行业资讯
    public function trade()
    {
        $posts=Post::where('columns','h')
            ->orderBy('order')
            ->orderBy('created_at','desc')
            ->paginate(6);
        $title="行业资讯";
        $navColumn=$this->navColumn;

        return view('news.center',compact('posts','title','navColumn'));
    }

    //新闻内容
    public function show($id)
    {
        $posts=Post::findOrFail($id);
        Post::findOrFail($id)->increment('clicks', 3);
        $description=str_limit(strip_tags($posts->content),150);
        $title=$posts->title;
        $title1=($posts->columns=='j')?"金砖动态":"行业资讯";
        $navColumn=$this->navColumn;

        return view('news.show',compact('posts','title','title1','description','navColumn'));

    }
}
