<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Seminar;
 
class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seminar = Seminar::orderBy('created_at', 'DESC')->get();
  
        return view('seminars.index', compact('seminar'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seminars.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Seminar::create($request->all());
 
        return redirect()->route('seminars.index')->with('success', 'Seminar added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $seminar = Seminar::findOrFail($id);
  
        return view('seminars.show', compact('seminar'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $seminar = Seminar::findOrFail($id);
  
        return view('seminars.edit', compact('seminar'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $seminar = Seminar::findOrFail($id);
  
        $seminar->update($request->all());
  
        return redirect()->route('seminars.index')->with('success', 'Seminar updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $seminar = Seminar::findOrFail($id);
  
        $seminar->delete();
  
        return redirect()->route('seminars.index')->with('success', 'Seminar deleted successfully');
    }
}