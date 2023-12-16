<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Trainor;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courses() {
        $courses = Course::orderBy('id') -> get();

        return view('courses.courses', ['courses' => $courses]);
    }

    public function create()
    {
        $trainors = User::list();

        return view('courses.create', ['trainors' => $trainors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request -> validate([
            'trainor_id'   => 'required|numeric',
            'title'   => 'required',
            'description'   => 'required',
        ]);
        
        Course::create([
            'trainor_id'   => $request->trainor_id,
            'title'   => $request->title,
            'description'   => $request->description
        ]);

        return redirect('/courses')->with('message', 'A new course has been added.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(Course $course, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $course->update($request->all());
        return redirect('/courses')->with('message', "$course->title has been updated.");
    }

    public function delete(Course $course) {
        $course->delete();
        
        return redirect('/courses')->with('message', "$course->title has been deleted successfully.");
    }
}
