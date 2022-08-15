<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function post()
    {
        return view('post.index');
    }

    public function form()
    {
        return view('form.index');
    }
}
