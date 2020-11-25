<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Blog.phpを呼び出す
use App\Models\Blog;

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
        $blogs = Blog::all();

        return view('blog.list', ['blogs' => $blogs]);
    }

}
