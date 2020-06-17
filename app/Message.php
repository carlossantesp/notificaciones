<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['sender_id','receiver_id','content'];

    public function receiver()
    {
        return $this->belongsTo(User::class,'receiver_id');
    }
}
