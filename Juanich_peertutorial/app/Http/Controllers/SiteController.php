<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trainor;
use App\Models\Course;
use App\Models\Trainee;

class SiteController extends Controller
{

    public function home() {
        return view('base.home');
    }

    // public function users() {
    //     $users = User::orderBy('username')->get();

    //     return view('users.users', ['users' => $users]);
    // }

    // public function trainors() {

    //     $trainors = Trainor::orderBy('user_id') -> get();

    //     return view('trainors.trainors', ['trainors' => $trainors]);
    // }
    
    // public function courses() {

    //     $courses = Course::orderBy('trainor_id') -> get();

    //     return view('courses.courses', ['courses' => $courses]);
    // }

    
    // public function trainees() {

    //     $trainees = Trainee::orderBy('user_id') -> get();

    //     return view('trainees.trainees', ['trainees' => $trainees]);
    // }
}
