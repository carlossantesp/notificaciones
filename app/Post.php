<?php

namespace App;

use App\Events\PostCreated;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','body','user_id'];

    protected $dispatchesEvents = ['created' => PostCreated::class];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
