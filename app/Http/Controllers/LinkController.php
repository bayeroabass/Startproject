<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\contactRequest;

class LinkController extends Controller
{
    public function contact(){
        return view('contact');
    }
    public function store(contactRequest $request){

        $message= new Message;
        $message->name= $request->name;
        $message->email= $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();
        $mailable = new ContactMessageCreated($message);
        Mail::to('admin@ntechnology.com')->send($mailable);
        flashy('Nous vous repondrons dans les plus brefs délais!');
        return redirect()->route('accueil');
    }
    public function services()
    {
        return view('services');
    }
    public function accueil()
    {
        return view('accueil');
    }
    public function about()
    {
        return view('about');
    }
    public function portfolio()
    {
        return view('portfolio');
    }

}
