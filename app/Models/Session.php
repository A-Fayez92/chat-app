<?php

namespace App\Models;

use App\Models\Chat;
use App\Models\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Session extends Model
{
    protected $fillable =['user1_id','user2_id'];
    public function chats()
    {
        return $this->hasManyThrough(Chat::class,Message::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
