<?php

namespace App\Http\Controllers;
use AppContact;

use Illuminate\Http\Request;
use App\AboutUs;

class ContactController extends Controller
{
    public function index()
    {

        

        // viewを表示
        return view('AboutUs');
    }
    
    public function thanks()
    {

        // メールを送信

        // viewを表示
        return view('thanks');
    }

    public function store(Request $request)
{
    //  DBにデータを保存
    $about_us = new AboutUs(); //Diaryモデルをインスタンス化

    $about_us->name = $request->name;
    $about_us->title = $request->title; //画面で入力されたタイトルを代入
    $about_us->content = $request->content; //画面で入力された本文を代入
    $about_us->save(); //DBに保存

    return redirect()->route('contact.thanks'); //一覧ページにリダイレクト
}

}