<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use Carbon\Carbon; // 追加
use Auth;
use App\User;


class DonationController extends Controller
{
    public function index() {
        //diariesテーブルのデータを全件取得
        //useしてるDiaryのallメソッドを実施
        //all()はテーブルのデータを全て取得するメソッド
        // $donations = Donation::all(); 
        // dd($donations); 
        //var_dump()とdie()を合わせたメソッド。変数の確認 + 処理のストップ
       
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            $userId = Auth::id();
        } else {
            $user = User::where('name', 'NexSeed')->first();
            $userId = $user->id;

        }

        $donation = new Donation();
        $donation->user_id = $userId;
        $donation->project_id = 1;
        $donation->amount = $request->title; //画面で入力されたタイトルを代入
        $donation->created_at = Carbon::now(); //dnationテーブルのcreated_atカラムに挿入（送信時の日時を代入
        $donation->updated_at = Carbon::now(); //画面で入力されたタイトルを代入
        $donation->save();

     return redirect()->route('welcome')->with('done', 'かしわぎです！！'); //welcomeページにリダイレクト
    }
}
