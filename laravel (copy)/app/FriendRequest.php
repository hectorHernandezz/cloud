<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class FriendRequest extends Model
{
    use Notifiable;

    protected $table = "friend_request";

    public $timestamps = false;
}
