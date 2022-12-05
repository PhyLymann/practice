<?php

namespace App\Http\Controllers;

use App\Models\Help;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'subject' => ['required'],
            'message' => ['required']
        ]);

        Help::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return redirect()->back()->with('message', 'Handled your message!');
    }
}
