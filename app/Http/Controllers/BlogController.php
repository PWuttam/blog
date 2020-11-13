<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * ブログ一覧を表示する
     * 
     * 引数は今回空に
     * @return view
     */
    public function showList()
    {
        return view('blog.list');
    }

}
