<?php

namespace App\Http\Controllers;

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
}
