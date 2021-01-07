<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actors = Actor::all();
        return view('Actors.list', compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Actors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actor = new Actor();

        $actor->name         = $request->input('name');
        $actor->year         = $request->input('year');
        $actor->country         = $request->input('country');


        if (!$request->hasFile('image')) {
            $actor->image = 'uploads/default.png';
        } else {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $actor->image = 'uploads/' . $imageName;
        }

        $actor->save();

        return redirect()->route('actors.list');
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
        $actor = Actor::findOrFail($id);
        return view('Actors.edit', compact('actor'));
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
        $actor = Actor::findOrFail($id);
        $actor->name          = $request->input('name');
        $actor->year          = $request->input('year');
        $actor->country          = $request->input('country');



        if (!$request->hasFile('image')) {
        } else {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $actor->image = 'uploads/' . $imageName;
        }

        $actor->save();



        return redirect()->route('actors.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actor= Actor::find($id);
        $actor->delete();
        return redirect()->route('actors.list');
    }
}
