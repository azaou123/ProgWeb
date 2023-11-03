<?php

namespace App\Models;

use App\Models\Exchange_teacher;
use App\Models\Academic_program;
use App\Models\Workshop;
use App\Models\Internship;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public $timestamps = false;
    // protected $primaryKey = 'id_teacher';

    protected $fillable = [
        'lastname', 'firstname', 'speciality', 'nationnality', 'university', 'email_teacher', 'phone_number'
    ];

    public function academic_programs()
    {
        return $this->hasMany(Academic_program::class);
    }

    public function workshops()
    {
        return $this->belongsToMany(Workshop::class);
    }

    public function internships()
    {
        return $this->belongsToMany(Internship::class);
    }

    public function exchange_teachers()
    {
        return $this->belongsToMany(Exchange_teacher::class);
    }
}
