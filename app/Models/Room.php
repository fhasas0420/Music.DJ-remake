<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';

    protected $fillable = [
        'room_name',
        'access_level',
        'description',
        'user_id',
        'icon',
        'thumbnail',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
