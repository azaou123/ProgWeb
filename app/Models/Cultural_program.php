<?php

namespace App\Models;
use App\Models\Student;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cultural_program extends Model
{
    public $timestamps = false;
    // protected $primaryKey = 'id_cultural_prog';
    protected $fillable = [
        'title',	'Date',	'description',	'image_program_C'	
    ];

    public static function boot()
    {
        parent::boot();

        static::created(function ($cultural_progarm) {
            News::create([
                'title' => $cultural_progarm->title,
                'description' => $cultural_progarm->description,
                'image' => $cultural_progarm->image_program_C,
                'created_at' => Carbon::now(),
            ]);
        });
        
        static::updating(function ($cultural_progarm) {
            $news = News::where('title', $cultural_progarm->title)->first();
            if ($news) {
                $news->update([
                    'title' => $cultural_progarm->title,
                    'description' => $cultural_progarm->description,
                    'image' => $cultural_progarm->image_program_C,
                    'updated_at' => Carbon::now(),
                ]);
            }
        });

        static::deleting(function ($cultural_progarm) {
            $news = News::where('title', $cultural_progarm->title)->first();
            if ($news) {
                $news->delete();
            }
        });
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    use HasFactory;
}
