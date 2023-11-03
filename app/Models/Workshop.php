<?php

namespace App\Models;
use App\Models\Teacher;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    public $timestamps = false;
    // protected $primaryKey = 'id_workshop';
    protected $fillable = [
        'title',	'description',	'university',	'country',	'city',	'date_start',	'date_end',	'type', 'image_workshop'
    ];

    public static function boot()
    {
        parent::boot();

        static::created(function ($workshop) {
            News::create([
                'title' => $workshop->title,
                'description' => $workshop->description,
                'image' => $workshop->image_workshop,
                'created_at' => Carbon::now(),
            ]);
        });

        static::updating(function ($workshop) {
            $news = News::where('title', $workshop->title)->first();
            if ($news) {
                $news->update([
                    'title' => $workshop->title,
                    'description' => $workshop->description,
                    'image' => $workshop->image_workshop,
                    'updated_at' => Carbon::now(),
                ]);
            }
        });

        static::deleting(function ($workshop) {
            $news = News::where('title', $workshop->title)->first();
            if ($news) {
                $news->delete();
            }
        });
    }

    public function partners()
    {
        return $this->belongsToMany(Partner::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }
    use HasFactory;
}
