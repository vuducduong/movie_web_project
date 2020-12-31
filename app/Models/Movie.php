<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function directors(){
        return $this->belongsTo(Director::class,'director_id');
    }
    public function countries(){
        return $this->belongsTo(Country::class,'country_id');
    }
    public function categories(){
        return $this->belongsToMany(Category::class,'moviecategories','movie_id','category_id');
    }
    public function actors(){
        return $this->belongsToMany(Actor::class,'actors','movie_id','actor_id');
    }
}
