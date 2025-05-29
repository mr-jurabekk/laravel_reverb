<?php


namespace App\Services;


use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class MessageService
{
    public function getMessage()
    {
        return Message::where('from', Auth::id())->get();
    }

    public function sendMessage($request)
    {
        Message::create([
            'from' => Auth::id(),
            'to' => $request->to,
            'text' => $request->text
        ]);
        return response('success', 200);
    }

}
