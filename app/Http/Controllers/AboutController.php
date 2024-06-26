<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\About;
 
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::orderBy('created_at', 'DESC')->get();
  
        return view('abouts.index', compact('about'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('abouts.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        About::create($request->all());
 
        return redirect()->route('abouts.index')->with('success', 'About added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $about = About::findOrFail($id);
  
        return view('abouts.show', compact('about'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $about = About::findOrFail($id);
  
        return view('abouts.edit', compact('about'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $about = About::findOrFail($id);
  
        $about->update($request->all());
  
        return redirect()->route('abouts.index')->with('success', 'About updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::findOrFail($id);
  
        $about->delete();
  
        return redirect()->route('abouts.index')->with('success', 'About deleted successfully');
    }
}