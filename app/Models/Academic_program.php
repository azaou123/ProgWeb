<?php

namespace App\Models;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\News;
use Carbon\Carbon;

class Academic_program extends Model
{
    // protected $primaryKey = 'id_program';
    public $timestamps = false;
    protected $fillable = [
        'title',	'description',	'NB_hours',	'course',	'image_program_ACAD', 'teacher_id'
    ];

    public static function boot()
    {
        parent::boot();

        static::created(function ($academic_progarm) {
            News::create([
                'title' => $academic_progarm->title,
                'description' => $academic_progarm->description,
                'image' => $academic_progarm->image_program_ACAD,
                'created_at' => Carbon::now(),
            ]);
        });
        
        static::updating(function ($academic_progarm) {
            $news = News::where('title', $academic_progarm->title)->first();
            if ($news) {
                $news->update([
                    'title' => $academic_progarm->title,
                    'description' => $academic_progarm->description,
                    'image' => $academic_progarm->image_program_ACAD,
                    'updated_at' => Carbon::now(),
                ]);
            }
        });

        static::deleting(function ($academic_progarm) {
            $news = News::where('title', $academic_progarm->title)->first();
            if ($news) {
                $news->delete();
            }
        });
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    use HasFactory;
}
