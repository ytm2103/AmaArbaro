<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = \DB::table('news')->get(); 
        return view('news', ['news' => $news]);
    }
}
