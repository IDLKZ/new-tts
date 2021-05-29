<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use App\Models\AdvantageBlock;
use App\Models\Contact;
use App\Models\MainBlock;
use App\Models\ServiceOne;
use App\Models\ServiceSecond;
use App\Models\Structure;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index()
    {
        $mainBlock = MainBlock::latest()->first();
        $adv = AdvantageBlock::all();
        $ADV = [];
        foreach ($adv as $v) {
            $ADV[$v->id] = $v;
        }
        $advantages = array_chunk($ADV, 3);
        $SERV = [];
        $serv1 = ServiceOne::all();
        foreach ($serv1 as $item) {
            $SERV[$item->id] = $item;
        }
        $servicesOne = array_chunk($SERV, 2);
        $SERV2 = [];
        $serv2 = ServiceSecond::all();
        foreach ($serv2 as $item) {
            $SERV2[$item->id] = $item;
        }
        $servicesSecond = array_chunk($SERV2, 2);
        $structures = Structure::all();
        $managers = Team::all();
        $contact = Contact::latest()->first();
        return view('welcome', compact('mainBlock', 'advantages', 'servicesOne', 'servicesSecond', 'structures', 'managers', 'contact'));
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
