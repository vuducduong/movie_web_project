<?php

namespace App\Http\Controllers;
use App\Models\Actor;
use App\Models\Country;
use App\Models\Director;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MovieController extends Controller
{

    public function index()
    {



        $movies = Movie::with(['country','director'])->get();
//      dd($movies);
//       $movie =Movie::paginate(10);
        return view('Movies.list', compact('movies'));

    }


    public function create()
    {
        $country = Country::all();
        $director = Director::all();
        $actors = Actor::all();


        return view('Movies.create', compact('country','director','actors'));
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





        if (!$request->hasFile('image')) {
            $movie->image = 'uploads/default.png';
        } else {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $movie->image = 'uploads/' . $imageName;
        }






//        if ($request->hasFile('video')) {
//            $pathVideo = $request->file('video')->storeAs('videos');
//            $movie->video = $pathVideo;
//        }



        if($request->hasFile('video') !== null) {
            $movie = $request->file('videos');
            $filename = $movie->getClientOriginalName();

            $movie->storeAs('storage/video/' , $filename);
            $movie->audio = $filename;
        }




        $movie->director_id  =$request->input('director_id');
        $movie->country_id   =$request->input('country_id');

        $movie->save();

        Session::flash('success', 'Upload with success');

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
        $country = Country::all();
        $director = Director::all();

        return view('Movies.edit', compact('movie','country','director' ));
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



        if (!$request->hasFile('image')) {
        } else {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $movie->image = 'uploads/' . $imageName;
        }



        if($request->hasFile('video')) {
            $currentVideo = $request->video;
            if($currentVideo) {
                Storage::delete('/pubic/' . $currentVideo);
            }
            $audio = $request->audio;
            $filename = $audio->getClientOriginalName();
            $audio->storeAs('storage/video/' , $filename);
            $movie->video = $filename;
        }





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
