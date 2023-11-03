<?php

namespace App\Models;
use App\Models\Project;
use App\Models\Fablab;
use App\Models\Cultural_program;
use App\Models\Exchanges_s;
use App\Models\Internship;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'lastname', 'firstname', 'date_birth', 'nationnality', 'university', 'email_student', 'phone_number', 'exchange_s_id', 'internship_id'
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }

    public function fablabs()
    {
        return $this->belongsToMany(Fablab::class);
    }

    public function cultural_programs()
    {
        return $this->belongsToMany(Cultural_program::class);
    }

    public function exchanges_s()
    {
        return $this->belongsTo(Exchanges_s::class);
    }

    public function internship()
    {
        return $this->belongsTo(Internship::class);
    }

    use HasFactory;
}
