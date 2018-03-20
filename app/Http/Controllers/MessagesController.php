<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        //create a new message
        $message = new Message;
        $message->nom = $request->input('name');
        $message->mail = $request->input('email');
        $message->message = $request->input('message');

        //save message
        $message->save();

        //redirect
        return redirect('/')->with('success' , 'Message envoyé');
    }



    public function getMessages(){

        $messages = Message::all();

        return view ('messages')->with('messages' , $messages);
    }

}
