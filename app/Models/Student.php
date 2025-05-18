<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'rank', 'bio'];
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    public function tutor() {
        return $this->belongsTo(Student::class);    
    }
}
