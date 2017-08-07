<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //联系我们内容页
    public function index()
    {
        return view('contact.index');
    }

    //招贤纳士
    public function jobs()
    {
        return view('contact.jobs');
    }
}
