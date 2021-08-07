<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginTamu extends Model
{
    use HasFactory;
    protected $table = 'tamu';
    protected $hidden = ['password'];
}
