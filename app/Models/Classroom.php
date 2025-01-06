<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $table = 'classrooms';

    protected $guarded = ['id'];


    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function getStudentCountAttribute()
    {
        return $this->students()->count();
    }

    public function getStudentCountFormattedAttribute()
    {
        return number_format($this->student_count);
    }
}
