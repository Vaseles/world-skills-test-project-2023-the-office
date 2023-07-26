<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'people_count', 
    ];

    public function messages() {
        return $this->hasMany(Message::class);
    }
    public function users() {
        return $this->hasMany(User::class);
    }
}
