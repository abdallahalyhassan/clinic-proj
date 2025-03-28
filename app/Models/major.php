<?php

namespace App\Models;
use Database\Factories\majorfactoryFactory;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class major extends Model
{
    use HasFactory;
    protected $fillable=[
       'name',
        'description'
    ];

    public function doctors(){
        return $this->hasMany(doctor::class);
    }
}
