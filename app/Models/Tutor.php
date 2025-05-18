<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $fillable = ['name', 'description', 'address'];
    /** @use HasFactory<\Database\Factories\TutorFactory> */
    use HasFactory;

    public function students() {
        return $this->hasMany(Student::class);
    }
}
