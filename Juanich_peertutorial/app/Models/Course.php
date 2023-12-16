<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'trainor_id',
        'title',
        'description',
    ];

    public function trainees() {
        return $this->hasMany(Trainee::class);
    }

    public function trainor() {
        return $this->belongsTo(Trainor::class);
    }
}
