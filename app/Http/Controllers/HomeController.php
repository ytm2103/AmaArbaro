<?php

namespace App\Http\Controllers;

use App\Donation; 
use App\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        return redirect()->route('home')->with('update_message', 'Update completed.');
        //一覧ページにリダイレクト+フラッシュメッセージ（トースト）
    }

    public function updateEmail(int $id, Request $request)
    {
        $user = User::find($id);

        $user->email = $request->email; //画面で入力されたemailを代入
        $user->save(); //DBに保存

        return redirect()->route('home')->with('update_message', 'Update completed.'); //一覧ページにリダイレクト
    }

    public function updatePassword(int $id, Request $request)
    {
        
        $user = User::find($id);

        if (Hash::check($request->current_password, $user->password))
        { 
            if ($request->new_password == $request->confirm_password)
            { 

                $request->user()->fill([
                    'password' => Hash::make($request->new_password)
                ])->save();

                // dd($request->new_password);
                
                return redirect()->route('home')->with('update_message', 'Update completed.'); //一覧ページにリダイレクト

            } else {
                echo 'new_password or confirm_password error';
            }
        } else {
            echo 'current_password error';
        }

    }

    public function deleteUser(int $id, Request $request)
    {
        
        $user = User::find($id);

        if (Hash::check($request->current_password, $user->password))
        { 
            $user->delete();
            return redirect('/');
            
        } else {
            echo 'current_password error';
        }

    }
}