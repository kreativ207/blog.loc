<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Name extends Model
{
    use Notifiable;

    protected $fillable = ['first_name', 'last_name'];
}
