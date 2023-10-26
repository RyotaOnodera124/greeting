<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function morning()
    {
        return view("message.morning");
    }

    public function afternoon()
    {
        return view("message.afternoon");
    }

    public function evening()
    {
        return view("message.evening");
    }

    public function night()
    {
        return view("message.night");
    }

    public function word($msg)
    {
        return view("message.word", ["msg" =>  $msg]);
    }
    
    public function random()
    {
        $messages = ["おはよう", "こんにちは", "こんばんは", "おやすみ"];
        $randomMessage = $messages[array_rand($messages)];

        return view("message.random", ["message" => $randomMessage]);
    }
}
