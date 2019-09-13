<?php

namespace App\Http\Controllers;

use App\Donation; 
use App\User; 
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
        $user = Auth::user();
        $donations = $user->donations()->orderBy('id')->get();
        return view('home', ['donations' => $donations], ['user' => $user]);
    }

    public function updateName(int $id, Request $request)
    {
        $user = User::find($id);

        $user->name = $request->name; //画面で入力されたnameを代入
        $user->save(); //DBに保存

        return redirect()->route('home'); //一覧ページにリダイレクト
    }

    public function updateEmail(int $id, Request $request)
    {
        $user = User::find($id);

        $user->email = $request->email; //画面で入力されたemailを代入
        $user->save(); //DBに保存

        return redirect()->route('home'); //一覧ページにリダイレクト
    }
}
