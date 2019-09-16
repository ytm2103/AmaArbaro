<?php

namespace App\Http\Controllers;

use App\Donation; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //donationsテーブルのデータを全件取得
        //useしてるDonationのallメソッドを実施
        //all()はテーブルのデータを全て取得するメソッド
        // $donations = Donation::find(1)->donations;
        // $user = $request->user();
        // $donations = $user->load('donations');
        // return view('home', ['donations' => $donations->donations]);
        $user = Auth::user();
        $donations = $user->donations()->orderBy('id')->get();
        return view('home', ['donations' => $donations], ['user' => $user]);
    }
}
