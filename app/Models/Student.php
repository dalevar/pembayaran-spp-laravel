<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $guarded = ['id'];
    protected $fillable = ['name', 'nim', 'major_id', 'academic_year_id', 'classroom_id'];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
