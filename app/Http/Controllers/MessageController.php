<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function storeMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'message' => 'required',
        ]);

        Message::create($request->all());
        return redirect('/');
    }
}
