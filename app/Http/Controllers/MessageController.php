<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\Message;
use App\Services\MessageService;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    private MessageService $service;
    public function __construct($service)
    {
        $this->service = $service;
    }

    public function getMessage()
    {
        NewMessage::dispatch();
        return $this->service->getMessage();
    }

    public function sendMessage(Request $request)
    {
        return $this->service->sendMessage($request);
    }


}
