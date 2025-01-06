<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    protected $table = 'academic_years';

    protected $guarded = ['id'];
    protected $fillable = ['year'];

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
