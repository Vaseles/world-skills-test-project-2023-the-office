<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'people_count', 'info'
    ];

    public function users() {
        return $this->hasMany(User::class);
    }

    public function messages() {
        return $this->hasMany(Message::class);
    }
}
