<?php

namespace App\Models;

use App\Models\Student;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange_s extends Model
{
    public $timestamps = false;
    // protected $primaryKey = 'id_exchange_s';
    protected $fillable = [
        'date_start', 'date_end', 'type', 'description'
    ];


    public static function boot()
    {
        parent::boot();

        static::created(function ($exchange_s) {
            News::create([
                'title' => 'Exchange',
                'description' => $exchange_s->description,
                'created_at' => Carbon::now(),
            ]);
        });

        static::updating(function ($exchange_s) {
            $news = News::where('title', $exchange_s->title)->first();
            if ($news) {
                $news->update([
                    'title' => $exchange_s->title,
                    'description' => $exchange_s->description,
                    'updated_at' => Carbon::now(),
                ]);
            }
        });

        static::deleting(function ($exchange_s) {
            $news = News::where('description', $exchange_s->description)->first();
            if ($news) {
                $news->delete();
            }
        });
    }
    public function students()
    {
        return $this->hasMany(Student::class);
    }
    use HasFactory;
}
