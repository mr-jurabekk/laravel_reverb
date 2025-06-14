<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function userTo()
    {
        return $this->belongsTo(User::class, 'to');
    }

    public function userFrom()
    {
        return $this->belongsTo(User::class, 'from');
    }
}
