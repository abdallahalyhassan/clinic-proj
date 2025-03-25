<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class oppintement extends Model
{
    protected $table = 'oppointements';
    protected $fillable=[
        'name',
        'phone',
        'email',
        'user_id',
        'doctor_id'
    ];
}
