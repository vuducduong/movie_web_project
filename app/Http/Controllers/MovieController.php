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
        $movies = Movie::paginate(3);
//        dd($movies);
        return view('Movies.list', compact('movies'));
    }


    public function create()
    {
        $country = Country::all();
        $director = Director::all();
        $actors = Actor::all();
        $categories = Category::all();

        return view('Movies.create', compact('country', 'director', 'actors', 'categories'));
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
        $actors = Actor::all();
        $categories = Category::all();
        return view('Movies.edit', compact('movie', 'country', 'director', 'categories', 'actors'));
    }


    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->fill($request->all());
        if (!$request->hasFile('image') && file_exists(public_path('images') . "/" . $request->image)) {
            $movie->image = $request->image;
        } else {
            if (file_exists(public_path('images') . "/" . $request->image)) {
                unlink(public_path('images') . "/" . $request->image);
            }
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $movie->image = $imageName;
        }
        if (!$request->hasFile('video') && file_exists(public_path('videos') . "/" . $request->video)) {
            $movie->video = $request->video;
        } else {
            if (file_exists(public_path('videos') . "/" . $request->video)) {
                unlink(public_path('videos') . "/" . $request->video);
            }
            $videoName = time() . '.' . $request->video->getClientOriginalExtension();
            $request->video->move(public_path('videos'), $videoName);
            $movie->video = $videoName;
        }
        foreach ($request->actor as $value) {
            Actor::find($value)->movies()->attach($movie->id);
        }
        foreach ($request->category as $val) {
            Category::find($val)->movies()->attach($movie->id);
        }

        $movie->save();
        return redirect()->route('movies.list');
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
        $movies = DB::table('movies')->where('name', 'like', '%' . $search . '%')->orwhere('year','like',"%$search%")->paginate(3);
        return view('Movies.list', compact('movies',));
    }


    public function indexFontEnd()
    {
        $movies = DB::table('movies')->where('year','=','2021')->get();
        $moviesYear2020 = DB::table('movies')->where('year','=','2020')->paginate('4');
        $moviesYear2019 = DB::table('movies')->where('year','<','2020')->get();
        $countries = Country::all();
        $categories = Category::all();
        return view('font-end.home', compact('movies', 'countries', 'categories','movies','moviesYear2020','moviesYear2019'));
    }

    public function showFontEnd($id)
    {
        $movie = Movie::findorfail($id);
        $categories = Category::all();
        $countries = Country::all();
        return view('font-end.movie-detail', compact('movie', 'categories', 'countries'));
    }

    public function showMovie($id)
    {

        $categos = Category::findorfail($id);
        $category_id = $categos->id;
        $movies = Movie::whereHas('categories', function ($q) use ($category_id) {
            $q->where("categories.id", "=", $category_id);
        })->get();

        return view('font-end.type-movie.movie-category', compact('movies'));
    }


    public function searchMovieForm(Request $request)
    {
        $search = $request->search;

        $data = DB::table('movies')
            ->join('directors', 'movies.director_id', '=', 'directors.id')
            ->select('movies.id as MoviesId', 'movies.name as MoviesName', 'movies.year', 'movies.time', 'movies.image as MovieImage', 'movies.video', 'movies.description', 'directors.name as DirectorsName')
            ->where('movies.name', 'LIKE', "%$search%")
            ->orWhere('.directors.name', 'LIKE', "%$search%")
            ->get();
        return view('font-end.type-movie.movie-movie', compact(['search', 'data']));

    }
}
