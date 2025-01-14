<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->paginate(10);

        return view('user.index',compact('users'));
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
         //validate form
         $request->validate([
            'profile_photo_path'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'name'         => 'required|min:5',
            'title'         => 'required|min:5',
            'email'   => 'required|min:5',
            'role'          => 'required|in:admin,user',
            'status'        => 'required|in:active,inactive',
            'password'      => 'required|min:8|confirmed',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/user', $image->hashName());

         //create user
         User::create([
            'profile_photo_path'         => $image->hashName(),
            'title'         => $request->title,
            'name'   => $request->name,
            'email'         => $request->email,
            'role'     => $request->role,
            'status'   => $request->status,
            'password' => Hash::make($request->password),
        ]);


        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('user.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $users = User::findOrFail($id);
        $users->delete();
        
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
