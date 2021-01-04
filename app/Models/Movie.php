<?php
//
//namespace App\Models;
//
//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
//
//class Movie extends Model
//{
//    use HasFactory;
//<<<<<<< HEAD
//    protected $fillable = [
//        'name',
//        'year',
//        'time',
//        'image',
//        'video',
//        'director_id',
//        'country_id',
//    ];
//    public function Contry(){
//        return $this->belongsTo('App\Models\Conntry');
//=======
//
//    public function directors(){
//        return $this->belongsTo(Director::class,'director_id');
//    }
//    public function countries(){
//        return $this->belongsTo(Country::class,'country_id');
//    }
//    public function categories(){
//        return $this->belongsToMany(Category::class,'moviecategories','movie_id','category_id');
//    }
//    public function actors(){
//        return $this->belongsToMany(Actor::class,'actors','movie_id','actor_id');
//>>>>>>> 41e9fe35f41bc6ec0a154b6fdea3dee9191aca5c
//    }
//}


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

    public function Contry()
    {
        return $this->belongsTo('App\Models\Conntry');
    }
}
