<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Country;
use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DirectorController extends Controller
{

    public function index()
    {
//        $directors = Director::all();

        $directors =Director::paginate(5);

        return view('Directors.list', compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Directors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $director = new Director();
        $director->name     = $request->input('name');
        $director->save();

        //tao moi xong quay ve trang danh sach phim
        return redirect()->route('directors.list');
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
        $director = Director::findOrFail($id);
        return view('Directors.edit', compact('director'));
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
        $director = Director::find($id);
        $director->fill($request->all());
        $director->save();
        return redirect()->route('directors.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $director= Director::find($id);
        $director->delete();
        return redirect()->route('directors.list');
    }



    public function search()
    {
        return view('layouts.layout');
    }

    public function getDirectorSearch(Request $request)
    {
        $search = $request->input('search');
        $directors = DB::table('directors')->where('name' ,'like','%' .$search. '%')->paginate(5);
        return view('Directors.list', compact('directors'));
    }
    public function searchMovie(Request $request){

        $search = $request->input('search');
        $director = Director::where('name','like',"%$search%")->get();
        return view('font-end.movie-type',compact('director'));
    }
}
