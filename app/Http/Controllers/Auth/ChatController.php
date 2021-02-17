<?php

namespace App\Http\Controllers\Auth;

use App\Models\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ChatResource;
use App\Events\PrivateChatEvent;

class ChatController extends Controller
{
    //
    public function send(Session $session, Request $request)
    {
        $message = $session->messages()->create(['content'=>$request->content]);

        $chat = $message->createForSend($session->id);

        $message->createForRecive($session->id , $request->to_user);
        
        Broadcast(new PrivateChatEvent($message->content , $chat));
        
        return response($message,200);
    }

    public function chats(Session $session)
    {
        return ChatResource::collection($session->chats->where('user_id',auth()->id()));

    }
}
