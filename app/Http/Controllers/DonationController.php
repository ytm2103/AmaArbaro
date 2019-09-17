<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use Carbon\Carbon; // 追加


class DonationController extends Controller
{
    public function index() {

       
    }

    public function store(Request $request)
    {
        $donation = new Donation();
        $donation->user_id = 1;
        $donation->project_id = 1;
        $donation->amount = $request->title; //画面で入力されたタイトルを代入
        $donation->created_at = Carbon::now(); //dnationテーブルのcreated_atカラムに挿入（送信時の日時を代入
        $donation->updated_at = Carbon::now(); //画面で入力されたタイトルを代入
        $donation->save();

     return redirect()->route('welcome')->with('success_message', 'Thank you for your donation!'); //welcomeページにリダイレクト
    }
}
