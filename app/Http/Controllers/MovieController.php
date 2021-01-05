<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\Director;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function index()
    {



        $movies = Movie::all();
//      dd($movies);
       $movie =Movie::paginate(10);
        return view('Movies.list', compact('movies'));

    }


    public function create()
    {
        $countries = Country::all();
        $directors = Director::all();


        return view('Movies.create', compact('countries','directors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movie();

        $movie->name         = $request->input('name');
        $movie->year         = $request->input('year');
        $movie->time         = $request->input('time');
        $movie->image        = $request->input('image');
        $movie->video        = $request->input('video');
        $movie->director_id  =$request->input('director_id');
        $movie->country_id   =$request->input('country_id');
        $movie->save();
        return redirect()->route('movies.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        $movie = Movie::all();

        return view('Movies.edit', compact('movie', 'movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->name          = $request->input('name');
        $movie->year          = $request->input('year');
        $movie->time          = $request->input('time');
        $movie->image         = $request->input('image');
        $movie->video         = $request->input('video');
        $movie->director_id   = $request->input('director_id');
        $movie->country_id    = $request->input('country_id');
        $movie->save();

        return redirect()->route('movies.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movies= Movie::find($id);

        $movies->delete();
        return redirect()->route('movies.list');
    }
    public function indexFontEnd(){
        $movies = Movie::all();
        return view('font-end.home',compact('movies'));
    }
    public function showFontEnd($id){
        $movie = Movie::findorfail($id);
        return view('font-end.movie-detail',compact('movie'));
    }
}
