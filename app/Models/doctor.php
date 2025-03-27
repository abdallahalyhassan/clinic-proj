<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    protected $fillable=[
        'name',
        'phone',
        'email',
        'major_id'
    ];


    public function major(){
        return $this->belongsTo(major::class);
    }
    public function oppointements(){
        return $this->hasMany(oppintement::class);
    }
}
