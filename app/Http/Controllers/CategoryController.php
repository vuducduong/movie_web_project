<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $categories = Category::all();
        $categories =Category::paginate(5);

        return view('Categories.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name     = $request->input('name');
        $category->save();

        //tao moi xong quay ve trang danh sach
        return redirect()->route('category.list');
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
        $category = Category::findOrFail($id);
        return view('Categories.edit', compact('category'));
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
//        $category = Category::find($id);
//        $category->fill($request->all());


        $category = Category::findOrFail($id);
        $category->name          = $request->input('name');
        $category->save();
        return redirect()->route('category.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category= Category::find($id);
        $category->movies()->detach();
        $category->delete();
        return redirect()->route('category.list');
    }


    public function search()
    {
        return view('layouts.layout');
    }

    public function getCategorySearch(Request $request)
    {
        $search = $request->input('search');
        $categories = DB::table('categories')->where('name' ,'like','%' .$search. '%')->paginate(5);
        return view('Categories.list', compact('categories'));
    }





    public function showCategory(){
        $categories = Category::all();
        return view('font-end.core.header',compact('categories'));
    }
}
