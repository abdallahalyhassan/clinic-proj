<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class major extends Model
{
    protected $fillable=[
       'name',
        'description'
    ];

    public function doctors(){
        return $this->hasMany(doctor::class);
    }
}
