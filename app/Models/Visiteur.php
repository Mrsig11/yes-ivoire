<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    protected $fillable = [
        'message', 'email', 'abonner',
    ];
}
