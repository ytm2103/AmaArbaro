<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact as Chinko;
use  App\Sent;




class ContactController extends Controller
{
    
    public function index(){
        return view('contact.form');
    }
    
    public function confirm(ContactRequest $request){
      
        $contact = $request->all();

        $request->session()->regenerateToken();

        return view('contact.confirm',$contact);
    }
     public function sent(ContactRequest $request){
      

        $contact = $request->all();
        if($request->action === 'back') {
            return redirect()->route('contact')->withInput($contact);
        }

        $request->session()->regenerateToken();
        
        //dbに保存modelファイル

        $sent = new Sent();
       
        $sent->email = $request->email;
        $sent->name = 0;
        $sent->message = $request->message;
        $sent->created_at = $request->created_at;
        $sent->save();

       // Mail::to('hogehoge@gmail.com')->send(new Chinko($contact));

        return view('contact.thanks');
    }
}
