<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class ContactMessageController extends Controller
{

    public function index()
    {
        $messages = Message::all();

        return view('message.index', compact('messages'));
    }

    public function create()
    {
        return view('message.create');
    }

    public function storeMessage()
    {
        $message = new Message();

        $message->id = request('id');
        $message->name = request('name');
        $message->email = request('email');
        $message->subject = request('subject');
        $message->message = request('message');

        $message->save();
        
        return redirect('/message');
    }
}
