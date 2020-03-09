<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Categories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('categories')
            ->where('trash', 0)
            ->get();
        // dd($categories);
        return view('admin.categories', compact('categories'));
    }

    public function categorytrash(Request $request)
    {
        $category_id = $request['category_id'];

        DB::table('categories')
            ->where('category_id', $category_id)
            ->update(
                ['trash' => 1]
            );

        return response()->json(['success' => 'inserted']);
    }

    public function categoryedit(Request $request)
    {
        $category_id = $request['category_id'];
        $description = $request['description'];
        $name = $request['name'];
        DB::table('categories')
            ->where('category_id', $category_id)
            ->update(
                [
                    'name' => $name,
                    'description' => $description
                ]
            );
        return response()->json(['success' => 'update']);
    }

    public function categorysave(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique|max:255',
            'description ' => 'required',
        ]);

        $cat = new Categories();
        $cat->name = $request['name'];
        $cat->description = $request['description'];
        $cat->trash = 0;
        $cat->save();

        // return response()->json(['success' => 'added']);
        return redirect()->route('categories');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}