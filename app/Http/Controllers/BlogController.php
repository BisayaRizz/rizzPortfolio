<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Blog;
 
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::orderBy('created_at', 'DESC')->get();
  
        return view('blogs.index', compact('blog'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Blog::create($request->all());
 
        return redirect()->route('blogs.index')->with('success', 'Blog added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = Blog::findOrFail($id);
  
        return view('blogs.show', compact('blog'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
  
        return view('blogs.edit', compact('blog'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::findOrFail($id);
  
        $blog->update($request->all());
  
        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
  
        $blog->delete();
  
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully');
    }
}