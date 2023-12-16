<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainee;
use App\Models\User;
use App\Models\Course;

class TraineeController extends Controller
{
    public function trainees() {

        $trainees = Trainee::orderBy('id') -> get();

        return view('trainees.trainees', ['trainees' => $trainees]);
    }

    public function create()
    {
        $users = User::list();
        return view('trainees.create', ['users' => $users]);

        // $courses = Course::list();
        // return view('trainees.create', ['courses' => $courses]);
    }
    // public function creates()
    // {
    //     $courses = Course::list();
    //     return view('trainees.create', ['courses' => $courses]);

    //     // $courses = Course::list();
    //     // return view('trainees.create', ['courses' => $courses]);
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request -> validate([
            'user_id'   => 'required|numeric',
            'course_id'   => 'required',
            // '' => 'required',
            'status' => 'required'
        ]);

        Trainee::create([
            'user_id'   => $request->user_id,
            'course_id'   => $request->course_id,
            'status' => $request->status,
        ]);

        return redirect('/trainees')->with('message', 'A new trainee has been added.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trainee $trainee)
    {
        return view('trainees.edit', compact('trainee'));
    }

    public function update(Trainee $trainee, Request $request)
    {
        $request->validate([
            // '' => 'required',
            'status' => 'required',
        ]);

        $trainee->update($request->all());
        return redirect('/trainees')->with('message', "Trainee with an ID of $trainee->id has been updated.");
    }

    public function delete(Trainee $trainee) {
        $trainee->delete();
        
        return redirect('/trainees')->with('message', "Trainee with an id of $trainee->id has been deleted successfully.");
    }
}
