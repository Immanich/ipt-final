<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function users() {
        $users = User::orderBy( 'id')->get();

        return view('users.users', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'username' => 'required',
            'full_name' => 'required',
            'email' => 'required|email'
        ]);

        User::create([
            'username' => $request->username,
            'full_name' => $request->full_name,
            'email' => $request->email
        ]);

        return redirect('/users')->with('message', 'A new user has been added');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
        ]);

        $user->update($request->all());
        return redirect('/users')->with('message', "$user->full_name has been updated.");
    }
    
    public function delete(User $user) {
        $user->delete();
        
        return redirect('/users')->with('message', "$user->full_name has been deleted successfully.");
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
    

    /**
     * Update the specified resource in storage.
     */
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}