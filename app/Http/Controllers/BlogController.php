<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();

        return view('blog.blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['title'=>'required|string',
                        'content'=>'required|string',
                        'image'=>'required|mimes:jpg,png,jpeg|max:5048']);
        
        

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->content = $request->content;
        if($request->hasfile('image')){
            $file=$request->file('image');
            $filename = time() . '.' .$file->getClientOriginalExtension();
            $file->move('uploads/', $filename);
            $blog->image=$filename;
           }
        $blog->save();

        return redirect()->back()->withSuccess(' Blog Created');

    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blog.create', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate(['title'=>'required|string',
        'content'=>'required|string',
        'image'=>'required|mimes:jpg,png,jpeg|max:5048']);

$blog->fill($request->all());
$blog->save();

return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->back()->withSuccess('Blog Deleted.');
    }
}
