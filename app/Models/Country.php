<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',

    ];

    public static function where(string $string, string $string1, string $string2)
    {
    }

    public function movies(){
        return $this->hasMany(Movie::class,'country_id');
    }
}
