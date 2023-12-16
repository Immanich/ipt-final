<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainor;
use App\Models\User;

class TrainorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function trainors() {

        $trainors = Trainor::orderBy('id')->get();

        return view('trainors.trainors', ['trainors' => $trainors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::list();
        return view('trainors.create', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request -> validate([
            'user_id'   => 'required|numeric',
            'specialty' => 'required',
        ]);

        Trainor::create([
            'user_id'   => $request->user_id,
            'specialty' => $request->specialty,
        ]);

        return redirect('/trainors')->with('message', 'A new trainor has been added.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trainor $trainor)
    {
        return view('trainors.edit', compact('trainor'));
    }

    public function update(Trainor $trainor, Request $request)
    {
        $request->validate([
            'specialty' => 'required',
        ]);

        $trainor->update($request->all());
        return redirect('/trainors')->with('message', "Trainor with an ID of $trainor->id has been updated.");
    }

    public function delete(Trainor $trainor) {
        $trainor->delete();
        
        return redirect('/trainors')->with('message', "Trainor with an id of $trainor->id has been deleted successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
