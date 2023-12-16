<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\User;

class Trainor extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'specialty'
    ];

    public function courses() {
        return $this->hasMany(Course::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
