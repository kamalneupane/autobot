<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use Session;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs=Blog::all();
        return view('admin.blogs.index')->with('blogs',$blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.blogs.create');
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
        $blog=new Blog;
        $blog->image=$request->image;
        $blog->name=$request->name;
        $blog->title=$request->title;
        $blog->desc=$request->desc;
        if($blog->save()){
            Session::flash('success','Blogs Added successfully');
            return redirect()->route('blogs');
        }
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
        $blog=Blog::find($id);
        return view('admin.blog.edit')->with('blog',$blog);
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
        $blog=Blog::find($id);
        $blog->image=$request->image;
        $blog->name=$request->name;
        $blog->title=$request->title;
        $blog->desc=$request->desc;
        if($blog->save()){
            Session::flash('success','Blogs Added successfully');
            return redirect()->route('blogs');
        }
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
        $blog=Blog::find($id);
        if($blog->delete()){
        Session::flash('warning','Blogs deleted successfully');
        return redirect()->back(); 
        }
    }
}
