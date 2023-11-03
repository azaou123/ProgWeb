<?php

namespace App\Models;
use App\Models\Student;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fablab extends Model
{
    public $timestamps = false;
    // protected $primaryKey = 'id_fablab';
    protected $fillable = [
        'title_fablab',	'image_fablab',	'description_fablab'
    ];

    public static function boot()
    {
        parent::boot();

        static::created(function ($fablab) {
            News::create([
                'title' => $fablab->title_fablab,
                'description' => $fablab->description_fablab,
                'image' => $fablab->image_fablab,
                'created_at' => Carbon::now(),
            ]);
        });

        static::updating(function ($fablab) {
            $news = News::where('title', $fablab->title_fablab)->first();
            if ($news) {
                $news->update([
                    'title' => $fablab->title,
                    'description' => $fablab->description,
                    'image' => $fablab->image_fablab,
                    'updated_at' => Carbon::now(),
                ]);
            }
        });

        static::deleting(function ($fablab) {
            $news = News::where('title', $fablab->title_fablab)->first();
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
