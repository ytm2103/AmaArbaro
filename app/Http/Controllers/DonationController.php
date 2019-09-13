<?php

namespace App\Http\Controllers;
use App\Donation;

use Illuminate\Http\Request;

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
        $donation = new Donation();
        
        $donation->user_id = 1;
        $donation->project_id = 1;
        $donation->amount = $request->title; //画面で入力されたタイトルを代入
        $donation->save();

     return redirect()->route('welcome'); //welcomeページにリダイレクト
    }
}
