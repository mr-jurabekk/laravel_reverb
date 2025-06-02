<?php


namespace App\Services;


use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MessageService
{

    public function getUsers(): \Illuminate\Database\Eloquent\Collection
    {
        return User::where('id', '!=', Auth::id())->get();
    }


    public function getMessage($request)
    {
        $authId = Auth::id();
        $otherId = $request->id;

        $messages = Message::where(function($query) use ($authId, $otherId) {
            $query->where('from', $authId)
                ->where('to', $otherId);
        })->orWhere(function($query) use ($authId, $otherId) {
            $query->where('from', $otherId)
                ->where('to', $authId);
        })->get();

        return $messages;
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
