<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Tamu extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = 'tamu';
    protected $guard = 'tamu';
    protected $guarded = [];
}
