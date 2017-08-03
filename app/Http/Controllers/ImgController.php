<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImgController extends Controller
{
    //图片保存至服务器并回传图片地址
    public function upload(Request $request)
    {
        $imgload=$request->file('image');
        $path = '/upload/'.$imgload->store('image', 'admin');
        return response($path);
    }
}
