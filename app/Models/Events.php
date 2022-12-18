<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $hidden = [
        'id',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
}
