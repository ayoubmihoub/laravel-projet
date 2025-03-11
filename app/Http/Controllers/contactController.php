<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Welcome;

class ContactController extends Controller
{
    public function welcome() {
        $welcome = new Welcome;
        $message = $welcome -> messageWelcome();
        return view('welcome', ['message' => $message]);
    }
}
