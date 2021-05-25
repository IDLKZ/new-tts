<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function docs()
    {
        return view('docs');
    }

    public function management()
    {
        return view('management');
    }

    public function sendMail(Request $request)
    {
        dd($request->all());
        $this->validate($request,["phone"=>"required"]);
//        $emails = Email::pluck('email')->toArray();
        $emails = ['nurbakit_5496@mail.ru', 'kurmanov.a@ttservice.kz', 'musin.zh@ttservice.kz'];
        if(count($emails)){
            Mail::to($emails)->send(new SendMessage($request->all()));
            return redirect()->route('main')
                ->with('success',__("messages.success"));
        }
        else{
            return redirect()->route('contact')
                ->with('fail',__("messages.failed"));
        }
    }
}
