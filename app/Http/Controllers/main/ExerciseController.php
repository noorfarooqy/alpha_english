<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    //

    public function listExercise(Request $request){

        return view('0.exercises.list_exercise');
    }
}
