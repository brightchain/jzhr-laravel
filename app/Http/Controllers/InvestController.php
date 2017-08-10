<?php

namespace App\Http\Controllers;

use App\Model\Invest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class InvestController extends Controller
{
    //合格投资者认定
    public function invest()
    {
        $msg = "这是一条简单的消息.";
        return response()->json(array('msg'=> $msg), 200);
    }

    public function store(Request $request)
    {
       $invests=new Invest;
       $invests->name=Input::get('r_name');
       $invests->phone=Input::get('mobile');
       $invests->monkey=Input::get('money');
       $invests->fund=Input::get('pr_id');
       $data='ok';
       if($invests->save()){
           return response($data);
       }

    }
}
