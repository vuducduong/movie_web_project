<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  Movie extends Model
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

    public function actors()
    {
       return $this->belongsToMany(Actor::class, 'movie_actors', 'movie_id', 'actor_id');
    }
    public function categories(){
        return $this->belongsToMany(Category::class,'movie_categories','movie_id','category_id' );
    }


    public function director()
    {
        return $this->belongsTo(Director::class,'director_id');
    }
    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }
}
