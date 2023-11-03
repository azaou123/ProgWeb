<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\News;
use Carbon\Carbon;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    public $timestamps = false;
    // protected $table = 'internship';
    // protected $primaryKey = 'id_internship';
    protected $fillable = [
        'title',	'description',	'date_start',	'date_end',	'company'
    ];

    public static function boot()
    {
        parent::boot();

        static::created(function ($internship) {
            News::create([
                'title' => $internship->title,
                'description' => $internship->description,
                'created_at' => Carbon::now(),
            ]);
        });

        static::updating(function ($internship) {
            $news = News::where('title', $internship->title)->first();
            if ($news) {
                $news->update([
                    'title' => $internship->title,
                    'description' => $internship->description,
                    'updated_at' => Carbon::now(),
                ]);
            }
        });

        static::deleting(function ($internship) {
            $news = News::where('title', $internship->title)->first();
            if ($news) {
                $news->delete();
            }
        });
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }
    use HasFactory;
}
