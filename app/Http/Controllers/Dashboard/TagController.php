<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::latest() -> get();
        return view('pages.post.tag.index', [
            'tags'           => $tags,
            'form_type'     => 'create'
        ]);
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
        // Validate
        $this -> validate($request, [
            'name'         => 'required',
        ]);
              
        
        // Store
            Tag::create([
            'name'        => $request -> name,
            'slug'        => Str::slug($request -> name),
        ]);

        // Return Back
        return back() -> with('success', 'Tag Added Successfully');
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
        $all_slider = Tag::latest() -> get();
        $edit = Tag::findOrFail($id);

        return view('pages.post.tag.index', [
            'tags'        => $all_slider,
            'edit'          =>  $edit,
            'form_type'     => 'edit'
        ]);
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
        // Validate
        $this -> validate($request, [
            'name'         => 'required',
        ]);

        $update = Tag::findOrFail($id);
        $update->update([
            'name'        => $request -> name,
            'slug'        => Str::slug($request -> name),
        ]);
        return back() -> with('success', 'Tag Update Successfully');
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
