<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    //

    protected $demo_exercises;
    protected $demo_figures;
    public function __construct()
    {
        $this->demo_exercises = [
            "listen_drag_animal",
            "listen_drag_weather",
            "listen_drag",
            "pair_match_action",
            "pair_match_animal",
            "pair_match_weather",
            "spell_action",
            "spell_animal",
            "spell_weather",
        ];
    }

    public function listExercise(Request $request){

        $exercises = $this->demo_exercises;
        return view('0.exercises.list_exercise', compact('exercises'));
    }
    public function getExercise(Request $request){

        $exercise = $request->query('exercise');
        abort_if(!in_array($exercise, $this->demo_exercises),404, 'Exercise is not in the demo');

        return view('0.exercises.'.$exercise);
    }
}
