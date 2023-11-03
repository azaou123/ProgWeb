<?php

namespace App\Models;
use App\Models\Student;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'title',	'description',	'image_project'	
    ];

    public static function boot()
    {
        parent::boot();

        static::created(function ($project) {
            News::create([
                'title' => $project->title,
                'description' => $project->description,
                'image' => $project->image_project,
                'created_at' => Carbon::now(),
            ]);
        });

        static::updating(function ($project) {
            $news = News::where('title', $project->title)->first();
            if ($news) {
                $news->update([
                    'title' => $project->title,
                    'description' => $project->description,
                    'image' => $project->image_project,
                    'updated_at' => Carbon::now(),
                ]);
            }
        });

        static::deleting(function ($project) {
            $news = News::where('title', $project->title)->first();
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
