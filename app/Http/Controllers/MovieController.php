<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Category;
use App\Models\Country;
use App\Models\Director;
use App\Models\Movie;
use App\Models\MovieActor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{

    public function index()
    {

//        $movies = Movie::with(['country', 'director'])->get();
        $movies =Movie::paginate(3);
//        dd($movies);
        return view('Movies.list', compact('movies'));
    }


    public function create()
    {
        $country = Country::all();
        $director = Director::all();
        $actors = Actor::all();
        $categories = Category::all();

        return view('Movies.create', compact('country', 'director', 'actors','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     *
     */
    public function store(Request $request, Movie $movie)
    {

        if ($request->hasFile('image')) {
            try {
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('images'), $imageName);
            } catch (\Exception $e) {
                if (file_exists(public_path('images') . "/" . $imageName)) {
                    unlink(public_path('images') . "/" . $imageName);
                }
            }
            try {
                $movie->fill($request->all());
                $movie->image = $imageName;
                $videoName = time() . '.' . $request->video->getClientOriginalExtension();
                $request->video->move(public_path('videos'), $videoName);
                $movie->video = $videoName;
                $movie->save();
                foreach ($request->actor as $actor1) {
                    Actor::find($actor1)->movies()->attach($movie->id);
                }
                foreach ($request->category as $val) {
                    Category::find($val)->movies()->attach($movie->id);
                }

            } catch (\Exception $e) {
                if (file_exists(public_path('images') . "/" . $imageName)) {
                    unlink(public_path('images') . "/" . $imageName);
                }

            }
//            dd($movie);
            return redirect()->route('movies.list');
        }
        return back()->with('error', 'You must select image file to upload.');
    }



    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        $country = Country::all();
        $director = Director::all();
        $actors= Actor::all();
        $categories = Category::all();
        return view('Movies.edit', compact('movie', 'country', 'director','categories','actors'));
    }


    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        if ($request->hasFile('image')) {
            try {
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('images'), $imageName);
            } catch (\Exception $e) {
                if (file_exists(public_path('images') . "/" . $imageName)) {
                    unlink(public_path('images') . "/" . $imageName);
                }
            }
            try {
                $movie->fill($request->all());
                $movie->image = $imageName;
                $videoName = time() . '.' . $request->video->getClientOriginalExtension();
                $request->video->move(public_path('videos'), $videoName);
                $movie->video = $videoName;
                $movie->save();
                foreach ($request->actor as $value) {
                    Actor::find($value)->movies()->attach($movie->id);
                }
                foreach ($request->category as $val) {
                    Category::find($val)->movies()->attach($movie->id);
                }



            } catch (\Exception $e) {
                if (file_exists(public_path('images') . "/" . $imageName)) {
                    unlink(public_path('images') . "/" . $imageName);
                }

            }
            return redirect()->route('movies.list');
        }



//        $movie->director_id = $request->input('director_id');
//        $movie->country_id = $request->input('country_id');
//
//        $movie->save();
//
//
//        return redirect()->route('movies.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        return redirect()->route('movies.list');
    }




    public function search()
    {
        return view('layouts.layout');
    }



    public function getMovieSearch(Request $request)
    {
        $search = $request->input('search');
//        $countries = Country::all();
//        $categories = Category::all();
//        $directors = Director::all();
//        $actors = Actor::all();
//        $movie = Movie::all();

        $movies = DB::table('movies')->where('name' ,'like','%' .$search. '%')->paginate(3);
        return view('Movies.list', compact('movies',));
    }





    public function indexFontEnd()
    {
        $movies = Movie::all();
        $countries = Country::all();
        $categories = Category::all();
        return view('font-end.home', compact('movies', 'countries', 'categories'));
    }

    public function showFontEnd($id)
    {
        $movie = Movie::findorfail($id);
        $categories = Category::all();
        $countries = Country::all();
        return view('font-end.movie-detail', compact('movie', 'categories', 'countries'));
    }
    public function showMovie($id){

//        $movies = Movie::all()->get();
        $categos = Category::findorfail($id);
        $category_id = $categos->id;
        $movies =Movie::whereHas('categories', function ($q) use ($category_id) {
            $q->where("categories.id", "=", $category_id);
        })->paginate(4);
        return view('font-end.movie-type',compact('movies'));
    }

    public function searchMovie(){
        return view('font-end.core.header');
    }
    public function searchMovieFontend(Request $request){



            $search = $request->input('search');
            $movies = Movie::where('name','like',"%$search%")->get();
            return view('font-end.movie-type',compact('movies',));
    }
}
