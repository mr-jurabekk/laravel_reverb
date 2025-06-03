<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Services\MessageService;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    private MessageService $service;
    public function __construct(MessageService $service)
    {
        $this->service = $service;
    }

    public function getUsers(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->service->getUsers();
    }


    public function getMessage(Request $request)
    {
        return $this->service->getMessage($request);
    }

    public function sendMessage(Request $request)
    {
        return $this->service->sendMessage($request);
    }


}
