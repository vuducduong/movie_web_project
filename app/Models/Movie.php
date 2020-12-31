<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'year',
        'time',
        'image',
        'video',
        'director_id',
        'country_id',
    ];
    public function Contry(){
        return $this->belongsTo('App\Models\Conntry');
    }
}
