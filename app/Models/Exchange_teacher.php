<?php

namespace App\Models;

use App\Models\Teacher;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange_teacher extends Model
{
    public $timestamps = false;
    // protected $table = 'exchange_teacher';
    // protected $primaryKey = 'id_exchange_teacher';
    protected $fillable = [
        'description' ,	
            'date_start' ,
            'date_end' 
    ];

    public static function boot()
    {
        parent::boot();

        static::created(function ($exchange_t) {
            News::create([
                'title' => 'Teacher exchange',
                'description' => $exchange_t->description,
                'created_at' => Carbon::now(),
            ]);
        });

        static::updating(function ($exchange_t) {
            $news = News::where('description', $exchange_t->description)->first();
            if ($news) {
                $news->update([
                    'description' => $exchange_t->description,
                    'updated_at' => Carbon::now(),
                ]);
            }
        });

        static::deleting(function ($exchange_t) {
            $news = News::where('description', $exchange_t->description)->first();
            if ($news) {
                $news->delete();
            }
        });
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    use HasFactory;
}
