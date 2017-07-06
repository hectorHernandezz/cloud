<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Friend extends Model
{
    use Notifiable;

    protected $table = "friend";

    public $timestamps = false;

}
