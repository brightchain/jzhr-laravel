<?php

namespace App\Http\Controllers;

use App\Model\Company;
use App\Model\Recruit;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $navColumn='联系我们';
    //联系我们内容页
    public function index()
    {
        $contacts=Company::where('name','contact')->first();
        $title='联系我们';
        return view('contact.index',compact('contacts','title'));
    }

    //招贤纳士
    public function jobs()
    {
        $jobs=Recruit::orderBy('order')
            ->orderBy('updated_at','DESC')
            ->get();
        $title="招贤纳士";
        $navColumn=$this->navColumn;

        return view('contact.jobs',compact('jobs','title','navColumn'));
    }
}
