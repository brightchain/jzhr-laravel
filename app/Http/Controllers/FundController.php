<?php

namespace App\Http\Controllers;

use App\Model\Company;
use App\Model\Product;
use App\Model\Project;
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
        $title=$funds->title;

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

    //业务范围
    public function scope()
    {
        $scope=Company::where('name','scope')->first();
        $title=$scope->title;

        return view('fund.scope',compact('scope','title'));
    }

    //项目案列
    public function case()
    {
        $title='项目案列';
        $title1='项目案列';
        $pasts=Project::orderBy('order')
            ->orderBy('created_at','DESC')
            ->paginate(5);

        return view('fund.case',compact('title','pasts','title1'));
    }

    public function past($id)
    {
        $pasts=Project::findOrFail($id);
        $title=$pasts->title;
        $title1="项目案列";
        return view('fund.caseshow',compact('title','pasts','title1'));
    }
}
