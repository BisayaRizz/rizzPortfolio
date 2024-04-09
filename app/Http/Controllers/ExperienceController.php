<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Experience;
 
class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experience = Experience::orderBy('created_at', 'DESC')->get();
  
        return view('experiences.index', compact('experience'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('experiences.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Experience::create($request->all());
 
        return redirect()->route('experience.index')->with('success', 'Experience added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $experience = Experience::findOrFail($id);
  
        return view('experiences.show', compact('experience'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $experience = Experience::findOrFail($id);
  
        return view('experiences.edit', compact('experience'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $experience = Experience::findOrFail($id);
  
        $experience->update($request->all());
  
        return redirect()->route('experience.index')->with('success', 'Experience updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $experience = Experience::findOrFail($id);
  
        $experience->delete();
  
        return redirect()->route('experience.index')->with('success', 'Experience deleted successfully');
    }
}