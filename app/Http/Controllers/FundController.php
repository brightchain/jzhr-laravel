<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

class FundController extends Controller
{
    //
    public function stock()
    {
        $funds=Product::where('type','1')
            ->orderBy('order')
            ->orderBy('updated_at')
            ->paginate(4);
        $title='股权投资';
        return view('fund.product',compact('funds','title'));
    }

    public function show($id)
    {
        $funds=Product::findOrFail($id);
        $title='股权投资';
        return view('fund.show',compact('funds','title'));
    }

    public function real()
    {
        $funds=Product::where('type','2')
            ->orderBy('order')
            ->orderBy('updated_at')
            ->paginate(4);
        $title='房地产投资';
        return view('fund.product',compact('funds','title'));
    }

    public function placement()
    {
        $funds=Product::where('type','3')
            ->orderBy('order')
            ->orderBy('updated_at')
            ->paginate(4);
        $title='定向增发';
        return view('fund.product',compact('funds','title'));
    }

    public function merger()
    {
        $funds=Product::where('type','4')
            ->orderBy('order')
            ->orderBy('updated_at')
            ->paginate(4);
        $title='并购（M&A）';
        return view('fund.product',compact('funds','title'));
    }
}
