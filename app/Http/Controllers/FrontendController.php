<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\About;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Seminar;
use App\Models\Skills;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch users with the role of admin
        $admin = User::where('role', 'admin')->get();

        $about = About::all();

        $skill = Skills::all();

        $experience = Experience::all();

        $education = Education::all();

        $seminar = Seminar::all();

        $blog = Blog::all();

        $contact = Contact::all();

        // Pass the fetched data to the front-end view
        return view('welcome', ['admin' => $admin, 'about' => $about, 'skill' => $skill, 'education' => $education, 'experience' => $experience, 'seminar' => $seminar, 'blog' => $blog, 'contact' => $contact]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
