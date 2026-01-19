<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'title',
        'pt',
        'intensity',
        'time',
        'img',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
