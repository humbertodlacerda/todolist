<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = [
        'user_id',
        'content'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'id', 'user_id');
    }
}
