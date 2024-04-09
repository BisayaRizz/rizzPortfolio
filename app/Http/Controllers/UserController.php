<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
 
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::orderBy('created_at', 'DESC')->get();
  
        return view('user.index', compact('user'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $admin = User::create($request->all());

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $admin->avatar = $avatarPath;
        }

        $admin->save();

        return redirect()->route('user.index')->with('success', 'User added successfully');
        
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
  
        return view('user.show', compact('user'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
  
        return view('user.edit', compact('user'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $user->role = $request->input('role');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
  
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $avatarPath;
        }
        
        $user->save();
                
        return redirect()->route('user.index')->with('success', 'User updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
  
        $user->delete();
  
        return redirect()->route('home')->with('success', 'User deleted successfully');
    }
}