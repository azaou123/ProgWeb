<?php

namespace App\Models;

use App\Models\Workshop;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    public $timestamps = false;
    // protected $primaryKey = 'id_partenaire';
    protected $fillable = [
        'name_company', 'function_company', 'description', 'adress', 'email_company', 'website', 'fax', 'logo'
    ];

    public function workshops()
    {
        return $this->belongsToMany(Workshop::class);
    }
    use HasFactory;
}
