<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FundController extends Controller
{
    //
    public function index()
    {
       return view('fund.product');
    }

    public function stock()
    {
        return view('fund.product');
    }

    public function show()
    {
        return view('fund.show');
    }

    public function scope()
    {
        return view('fund.scope');
    }
}
