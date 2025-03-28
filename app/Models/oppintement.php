<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oppintement extends Model
{

    use HasFactory;
    protected $table = 'oppointements';
    protected $fillable=[
        'name',
        'phone',
        'email',
        'user_id',
        'doctor_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function doctor(){
        return $this->belongsTo(doctor::class);
    }
}
